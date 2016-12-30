<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Comment;
use AppBundle\Entity\Task;
use AppBundle\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function createFormT()
    {
        $task = new Task();
        $form = $this->createFormBuilder($task)
            ->setAction($this->generateurl('added'))
            ->add('name', TextType::class)
            ->add('description', TextareaType::class)
            ->add('term', DateTimeType::class)
            ->add('priority', NumberType::class)
            ->add('category', EntityType::class, ['class' => 'AppBundle:Category', 'choice_label' => 'name', 'query_builder' =>
                function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.user = :user')
                        ->setParameter('user', $this->getUser());
                }])
            ->add('Add', 'submit')
            ->getForm();
        return $form;
    }

    public function createEditForm($taskId)
    {
        $task = $this->getDoctrine()->getRepository('AppBundle:Task')->findOneById($taskId);
        $editForm = $this->createFormBuilder($task)
            ->setAction('/edited/' . $taskId)
            ->add('name', TextType::class, ['data' => $task->getName()])
            ->add('description', TextareaType::class, ['data' => $task->getDescription()])
            ->add('term', DateTimeType::class, ['data' => $task->getTerm()])
            ->add('priority', NumberType::class, ['data' => $task->getPriority()])
            ->add('category', EntityType::class, ['class' => 'AppBundle:Category', 'choice_label' => 'name', 'query_builder' =>
                function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.user = :user')
                        ->setParameter('user', $this->getUser());
                }])
            ->add('Edit', 'submit')
            ->getForm();
        return $editForm;
    }

    /**
     * @Route("/add_comment/{taskId}", name="add_comment")
     */
    public function addCommentAction(Request $req, $taskId)
    {
        if ($this->getUser()) {
            $comment = new Comment();
            $commForm = $this->createFormBuilder($comment)
                ->setAction("/add_comment/{$taskId}")
                ->add('text', TextareaType::class)
                ->add('Comment', SubmitType::class)
                ->getForm();

            $commForm->handleRequest($req);
            if ($commForm->isSubmitted()) {
                $comment = $commForm->getData();
                $comment->setUser($this->getUser());
                $comment->setDate(new \DateTime());
                $comment->setTask($this->getDoctrine()->getRepository('AppBundle:Task')->find($taskId));
                $em = $this->getDoctrine()->getManager();
                $em->persist($comment);
                $em->flush();
                return $this->redirect("/#" . $taskId);
            }

            return $this->render(
                'AppBundle:Task:addComment.html.twig',
                array('commForm' => $commForm->createView())
            );
        } else return $this->redirect("/login");
    }

    /**
     * @Route("/", name="main")
     * @Template("AppBundle:Task:main.html.twig")
     */

    public function mainAction(Request $req)
    {
        $doneFilter = false;
        $edit = false;
        if ($this->getUser()) {
            if ($req->getMethod() == 'POST') {
                if ('on' == $req->get('doneFilterChecked'))
                    $doneFilter = true;
            }
            if ($req->getMethod() == 'GET') {
                $edit = $req->get('edit');
            }
            $repoTask = $this->getDoctrine()->getRepository('AppBundle:Task');
            $tasks = $repoTask->findByUser($this->getUser(), ['term' => 'DESC']);
            $repoComm = $this->getDoctrine()->getRepository('AppBundle:Comment');
            $comments = $repoComm->findByUser($this->getUser(), ['date' => 'DESC']);
            $counters = [];
            foreach ($comments as $comment) {
                $currOffset = $comment->getTask()->getId();
                if (!isset($counters[$currOffset])) {
                    $counters[$currOffset] = 0;
                }
                $counters[$currOffset]++;
            }
            $form = $this->createFormT();
            return ['form' => $form->createView(), 'tasks' => $tasks, 'comments' => $comments, 'counters' => $counters, 'doneFilter' => $doneFilter, 'edit' => $edit];
        } else return $this->redirect("/login");
    }


    /**
     * @Route("/added", name="added")
     */

    public function newTaskAction(Request $req)
    {
        $form = $this->createFormT();
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $task = new Task();
            $task = $form->getData();
            $task->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->render('AppBundle:Task:show.html.twig', ['task' => $task]);
        }

    }

    /**
     * @Route("/admin", name="adminPanel")
     * @Template("AppBundle:Task:panel.html.twig")
     */

    public function adminAction(Request $req)
    {
        if ($this->getUser()) {
            $category = new Category();
            $alert = "";
            $form = $this->createFormBuilder($category)
                ->setAction('#')
                ->add('name', TextType::class)
                ->add('Add', SubmitType::class)
                ->getForm();
            $form->handleRequest($req);
            if ($form->isSubmitted()) {
                $category = $form->getData();
                $category->setUser($this->getUser());
                $em = $this->getDoctrine()->getManager();
                $em->persist($category);
                $em->flush();
                $alert = "New category added.";
            }

            return ['alert' => $alert, 'form' => $form->createView()];
        } else return $this->redirect("/login");
    }

    /**
     * @Route("/deleteTask/{taskId}", name="delTask")
     */
    public function deleteTaskAction($taskId)
    {
        if ($this->getUser()) {
            $task = $this->getDoctrine()->getRepository('AppBundle:Task')->findOneById($taskId);
            $task->setUser(NULL);
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            return new Response("<html><body><p>All good.</p></body></html>");
        } else return $this->redirect("/login");
    }

    /**
     * @Route("/setDone/{taskId}", name="setDone")
     */

    public function setDoneAction($taskId)
    {
        if ($this->getUser()) {
            $task = $this->getDoctrine()->getRepository('AppBundle:Task')->findOneById($taskId);
            if ($task->getIsDone())
                $task->setIsDone(false);
            else
                $task->setIsDone(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            return $this->redirect("/#" . $taskId);
        } else return $this->redirect("/login");
    }

    /**
     * @Route("/editTask/{taskId}")
     */

    public function editTaskAction($taskId)
    {
        if ($this->getUser()) {
            $task = $this->getDoctrine()->getRepository('AppBundle:Task')->find($taskId);
            if ($task->getIsDone()) {
                return $this->render(
                    'AppBundle:Task:editTask.html.twig', ['task' => $task]);
            } else {
                $editForm = $this->createEditForm($taskId);
                return $this->render(
                    'AppBundle:Task:editTask.html.twig',
                    ['editForm' => $editForm->createView()]
                );
            }
        } else return $this->redirect("/login");
    }

    /**
     * @Route("/edited/{taskId}")
     */

    public function editedTaskAction(Request $req, $taskId)
    {
        if ($this->getUser()) {
            $editForm = $this->createEditForm($taskId);
            $editForm->handleRequest($req);
            if ($editForm->isSubmitted()) {
                $task = $this->getDoctrine()->getRepository('AppBundle:Task')->find($taskId);
                $task = $editForm->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($task);
                $em->flush();
                return $this->redirect("/#" . $taskId);
            }
        } else return $this->redirect("/login");
    }


}
