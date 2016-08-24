<?php

namespace daoImpl;

use dao\IUserRoleDAO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IUserRoleDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of AgenceDAO
 *
 * @author amen
 */
class UserRoleDAO extends DAO implements IUserRoleDAO {

    function __construct($entity) {
        parent::__construct($entity);
    }

    public function getOne($object) {
        $query = $this->em->createQuery("SELECT e FROM entities\UserRole e JOIN e.users u WHERE u.id = :Id");
        $query->setParameter('Id', $object->getId());
        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
            echo $ex->getMessage();
        }
    }

}
