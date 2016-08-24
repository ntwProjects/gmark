<?php

namespace dmapimpl;

use dmapimpl\DAO,
    idmap\IService;

require APPPATH . 'third_party/dmap/dmapimpl/DAO.php';
require APPPATH . 'third_party/dmap/idmap/IService.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * implémente l'interface IService
 *
 * @author amen
 */
class Service implements IService {

    private $dao;

    function __construct($entity) {
        $this->dao = new DAO($entity);
    }

    public function count() {
       return $this->dao->count();
    }

    public function deleteAll() {
        $this->dao->deleteAll();
    }

    public function deleteOne($object) {
        $this->dao->deleteOne($object);
    }

    public function deleteOneById($pk) {
        $this->dao->deleteOneById($pk);
    }
    
    public function deleteStateAll() {
        
    }

    public function deleteStateOne($object) {
        
    }

    public function deleteStateOneById($pk) {
        
    }

    public function executeQuery($query) {
        $this->dao->executeQuery($query);
    }

    public function executeUpdate($query) {
       return $this->dao->executeUpdate($query);
    }

    public function getAll() {
        return $this->dao->getAll();
    }

    public function getAllWithArraySort($sortPropertyInfosCollection) {
       return $this->dao->getAllWithArraySort($sortPropertyInfosCollection);
    }

    public function getAllWithFirstAndArraySort($first, $count, $sortPropertyInfosCollection) {
      return  $this->dao->getAllWithFirstAndArraySort($first, $count, $sortPropertyInfosCollection);
    }

    public function getAllWithFirstAndSortAndOrder($first, $count, $sortProperty, $sortAsc) {
       return $this->dao->getAllWithFirstAndSortAndOrder($first, $count, $sortProperty, $sortAsc);
    }

    public function getAllWithSortAndOrder($sortProperty, $sortAsc) {
        return $this->dao->getAllWithSortAndOrder($sortProperty, $sortAsc);
    }

    public function getOne($pk) {
        return $this->dao->getOne($pk);
    }

    public function saveAll($objects) {
        $this->dao->saveAll($objects);
    }

    public function saveOne($object) {
        $this->dao->saveOne($object);
    }

    public function updateOne($object) {
        $this->dao->updateOne($object);
    }
    
    public function updateOneById($pk) {
        $this->dao->updateOneById($pk);
    }
    function getDao() {
        return $this->dao;
    }

    function setDao($dao) {
        $this->dao = $dao;
    }


//put your code here
}
