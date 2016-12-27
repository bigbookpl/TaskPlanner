<?php

namespace AppBundle\Controller;

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

class DefaultController extends Controller
{
    /**
     * @Route("/add_comment/{taskId}", name="add_comment")
     */
    public function addCommentAction(Request $req, $taskId)
    {
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
    }


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
            ->add('Dodaj', 'submit')
            ->getForm();
        return $form;
    }

    /**
     * @Route("/", name="main")
     * @Template("AppBundle:Task:main.html.twig")
     */

    public function mainAction(Request $req)
    {
        $repoTask = $this->getDoctrine()->getRepository('AppBundle:Task');
        $tasks = $repoTask->findByUser($this->getUser());
        $repoComm = $this->getDoctrine()->getRepository('AppBundle:Comment');
        $comments = $repoComm->findByUser($this->getUser(), ['date' => 'DESC']);
        $form = $this->createFormT();
        return ['form' => $form->createView(), 'tasks' => $tasks, 'comments' => $comments];

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
        $this->denyAccessUnlessGranted("ROLE_ADMIN");
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
    }

    /**
     * @Route("/deleteTask/{taskId}")
     */
    public function deleteTask($taskId)
    {
        $user = $this->getUser();
        $user->removeTask($this->getDoctrine()->getRepository('AppBundle:Task')->find($taskId));
        return new Response();
    }

}
