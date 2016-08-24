<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace idmap;

/**
 * interface des opérations de base (CRUD)
 * @author mundhaka
 */
interface ICRUD {

    //put your code here

    public function create($service, $entity);

    public function delete($service, $id);

    public function read($service);

    public function update($service, $entity);
}
