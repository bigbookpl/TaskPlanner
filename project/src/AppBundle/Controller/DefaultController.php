<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
            ->add('term', 'date')
            ->add('priority', 'number')
            ->add('category', 'text')
            ->add('Dodaj', 'submit')
            ->getForm();
        return $form;
    }


    /**
     * @Route("/main", name="main")
     * @Template("AppBundle:Task:main.html.twig")
     */

    public function mainAction()
    {
        $em = $this->getDoctrine()->getRepository('AppBundle:Task');
        $tasks = $em->findAll();
        $form = $this->createFormT();
        return ['form' => $form->createView(), 'tasks' => $tasks];

    }


    /**
     * @Route("/added", name="added")
     */

    public function newTaskAction(Request $req)
    {
        $form = $this->createFormT();
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $task = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->render('AppBundle:Task:show.html.twig', ['task' => $task]);
        }

    }
}
