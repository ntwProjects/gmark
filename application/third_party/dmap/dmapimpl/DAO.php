<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace dmapimpl;

use Doctrine,
    Doctrine\ORM\NonUniqueResultException,
    Doctrine\ORM\NoResultException,
    Doctrine\ORM\Query,
    Doctrine\Common\Collections\ArrayCollection,
    idmap\IDAO;

require APPPATH . 'third_party/dmap/idmap/IDAO.php';
require BASEPATH . '/libraries/Doctrine.php';

/**
 * implémente l'interface IDAO
 *
 * @author amen
 */
class DAO implements IDAO {

    protected $em;
    protected $entity;
    protected $doctrine;

    function __construct($entity) {
        $this->doctrine = Doctrine::getInstance();
        $this->em = $this->doctrine->getEm();
        $this->entity = $entity;
    }

    public function count() {
        $count = 0;
        $query = $this->em->createQuery("SELECT COUNT(e) FROM "
                . $this->entity . " e");
        try {
            $count = $query->getSingleResult();
        } catch (NonUniqueResultException $ex) {
            $ex->getMessage();
        }
        return $count;
    }

    public function deleteAll() {
        $query = $this->em->createQuery("DELETE FROM " . $this->entity);
        $query->execute();
    }

    public function deleteOne($object) {
        $current = $this->em->getRepository('entities\\' . $this->entity)->find($object->getId());
        if ($current == null) {
            return FALSE;
        }
        $this->em->remove($current);
        $this->em->flush();
        return true;
    }

    public function deleteOneById($pk) {
        $object = $this->em->find("entities\\" . $this->entity, $pk);
        if ($object == null) {
            return FALSE;
        }
        $this->em->remove($object);
        $this->em->flush();
        return true;
    }

    public function deleteStateAll($field) {
        $current = $this->em->getRepository('entities\\' . $this->entity)->find($object->getId());
        if ($current == null) {
            return FALSE;
        }
        $this->em->merge($current);
        $this->em->flush();
        return TRUE;
    }

    public function deleteStateOne($object) {
        $current = $this->em->getRepository('entities\\' . $this->entity)->find($object->getId());
        if ($current == null) {
            return FALSE;
        }
        $this->em->merge($current);
        $this->em->flush();
        return TRUE;
    }

    public function deleteStateOneById($pk) {
        $current = $this->em->getRepository('entities\\' . $this->entity)->find($pk);
        if ($current == null) {
            return FALSE;
        }
        $this->em->merge($current);
        $this->em->flush();
        return TRUE;
    }

    public function executeQuery(Query $query) {
        return $query->getResultList();
    }

    public function executeUpdate(Query $query) {
        return $query->execute();
    }

    public function getAll() {
        $list = new ArrayCollection();
        $query = $this->em->getRepository('entities\\' . $this->entity);
//                createQuery("SELECT e FROM entities\\" . $this->entity . " e WHERE e.state=0 ORDER BY e.id ASC");
        try {
            $list = $query->findAll();
            foreach ($list as $item) {
                if ($item->getState() != 0) {
                    $list->removeElement($item);
                }
            }
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $list;
    }

    public function getAllWithFirstAndSortAndOrder($first, $count, $sortProperty, $sortAsc) {
        $list = new ArrayCollection();
        $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e "
                . "ORDER BY e" . $sortProperty(($sortAsc) ? " ASC" : " DESC"));

        $query->setFirstResult($first);
        $query->setMaxResults($count);
        try {
            $list = $query->getResultList();
        } catch (NoResultException $ex) {
            $ex->getMessage();
        }
        return $list;
    }

    public function getAllWithFirstAndArraySort($first, $count, $sortPropertyInfosCollection) {
        $list = new ArrayCollection();
        $query = $this->em . createQuery("SELECT e FROM " . $this->entity . " e "
                        . $this->getOrderFragment($sortPropertyInfosCollection));
        $query->setFirstResult($first);
        $query->setMaxResults($count);
        try {
            $list = $query->getResultList();
        } catch (NoResultException $ex) {
            $ex->getMessage();
        }
        return $list;
    }

    public function getAllWithSortAndOrder($sortProperty, $sortAsc) {
        $list = new ArrayCollection();
        $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e "
                . "ORDER BY e" . $sortProperty(($sortAsc) ? " ASC" : " DESC"));
        try {
            $list = $query->$this->em->createQuery()->getResultList();
        } catch (NoResultException $ex) {
            $ex->getMessage();
        }
        return $list;
    }

    public function getAllWithArraySort($sortPropertyInfosCollection) {
        $list = new ArrayCollection();
        $query = $this->em . createQuery("SELECT e FROM " . $this->entity . " e "
                        . $this . getOrderFragment($sortPropertyInfosCollection));
        $query->setFirstResult($first);
        $query->setMaxResults($count);
        try {
            $list = $query->getResultList();
        } catch (NoResultException $ex) {
            $ex->getMessage();
        }
        return $list;
    }

    public function getOne($pk) {
        return $this->em->getRepository('entities\\' . $this->entity)->find($pk);
    }

    public function saveAll($objects) {
        foreach ($objects as $obj) {
            $this->em->persist($obj);
            $this->em->flush();
        }
        return $objects;
    }

    public function saveOne($object) {
        $this->em->persist($object);
        $this->em->flush();
//        return $object;
    }

    public function updateOne($object) {
        if ($object == null) {
            return FALSE;
        }
        $this->em->merge($object);
        $this->em->flush();
        return TRUE;
    }

    public function updateOneById($pk) {
        $current = $this->em->getRepository('entities\\' . $this->entity)->find($pk);
        if ($current == null) {
            return FALSE;
        }
        $this->em->merge($current);
        $this->em->flush();
        return TRUE;
    }

    protected function getOrderFragment($sortPropertyInfosCollection) {
        return $this->getOrderFragment($sortPropertyInfosCollection, "e");
    }

    protected function getOrderFragments($sortPropertyInfosCollection, $prefix) {
        if ($sortPropertyInfosCollection == null) {
            return "";
        }
        $orderFragmentBuilder = "ORDER BY";
        $i = 1;
        foreach ($sortPropertyInfosCollection as $spi) {
            $orderFragmentBuilder . " ";
            $orderFragmentBuilder . $spi->getDQLFragment($prefix);
            if ($i < sizeof($sortPropertyInfosCollection)) {
                $orderFragmentBuilder . ",";
            }
            $i++;
        }
        return $orderFragmentBuilder;
    }

    function getEm() {
        return $this->em;
    }

    function getEntity() {
        return $this->entity;
    }

    function getDoctrine() {
        return $this->doctrine;
    }

    function setEm($em) {
        $this->em = $em;
    }

    function setEntity($entity) {
        $this->entity = $entity;
    }

    function setDoctrine($doctrine) {
        $this->doctrine = $doctrine;
    }


}
