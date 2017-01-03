<?php

namespace AppBundle\Repository;

/**
 * TaskRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TaskRepository extends \Doctrine\ORM\EntityRepository
{

    public function findTodayTasks()
    {
        $date = new \DateTime();
        $tasks = $this->getEntityManager()->createQuery('SELECT t FROM AppBundle:Task t WHERE t.term LIKE :today')->setParameter('today', $date->format('Y-m-d') . '%')->getResult();
        return $tasks;
    }

    public function findByDay($day)
    {
        $tasks = $this->getEntityManager()->createQuery('SELECT t FROM AppBundle:Task t WHERE t.term LIKE :day')->setParameter('day', $day . '%')->getResult();
        return $tasks;
    }

    public function findByCategoryForUser($categoryId, $user)
    {
        $tasks = $this->getEntityManager()->createQuery('SELECT t FROM AppBundle:Task t WHERE t.category = :category AND t.user = :user')->setParameter('category', $categoryId)->setParameter('user', $user)->getResult();
        return $tasks;
    }

}
