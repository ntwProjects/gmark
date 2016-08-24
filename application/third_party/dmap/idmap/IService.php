<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace idmap;

/**
 *interface des services
 * @author amen
 */
interface IService {

    public function count();

    public function deleteAll();

    public function deleteOne($object);

    public function deleteOneById($pk);

    public function deleteStateAll();

    public function deleteStateOne($object);

    public function deleteStateOneById($pk);

    public function getAll();

    public function getAllWithFirstAndSortAndOrder($first, $count, $sortProperty, $sortAsc);

    public function getAllWithFirstAndArraySort($first, $count, $sortPropertyInfosCollection);

    public function getAllWithSortAndOrder($sortProperty, $sortAsc);

    public function getAllWithArraySort($sortPropertyInfosCollection);

    public function getOne($pk);

    public function saveAll($objects);

    public function saveOne($object);

    public function updateOne($object);
    
    public function updateOneById($pk);

    public function executeQuery($query);

    public function executeUpdate($query);
}
