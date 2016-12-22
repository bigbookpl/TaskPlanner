<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Task;
use AppBundle\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ));
    }


    public function createFormT()
    {
        $task = new Task();
        $form = $this->createFormBuilder($task)
            ->setAction($this->generateurl('added'))
            ->add('name', 'text')
            ->add('description', 'textarea')
            ->add('term', 'datetime')
            ->add('priority', 'number')
            ->add('category', 'entity', ['class' => 'AppBundle:Category', 'choice_label' => 'name', 'query_builder' =>
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
     * @Route("/main", name="main")
     * @Template("AppBundle:Task:main.html.twig")
     */

    public function mainAction(Request $req)
    {
        $repoTask = $this->getDoctrine()->getRepository('AppBundle:Task');
        $tasks = $repoTask->findByUser($this->getUser());
        $repoComm = $this->getDoctrine()->getRepository('AppBundle:Comment');
        $comments = $repoComm->findByUser($this->getUser(), ['date' => 'DESC']);
        $form = $this->createFormT();
        $comment = new Comment();
        $commForm = $this->createFormBuilder($comment)
            ->setAction('#')
            ->add('text', 'textarea')
            ->add('Comment', 'submit')
            ->getForm();
        $commForm->handleRequest($req);
        if ($commForm->isSubmitted()) {
            $comment = $commForm->getData();
            $comment->setUser($this->getUser());
            $comment->setDate(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
        }

        return ['form' => $form->createView(), 'tasks' => $tasks, 'comments' => $comments, 'commForm' => $commForm->createView()];

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
            ->add('name', 'text')
            ->add('Add', 'submit')
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
}
