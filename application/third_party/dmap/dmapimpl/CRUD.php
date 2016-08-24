<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace dmapimpl;

use idmap\ICRUD;

require APPPATH . 'third_party/dmap/idmap/ICRUD.php';

class CRUD implements ICRUD {

    function __construct() {
        
    }

    public function create($service, $entity) {
        $service->saveOne($entity);
    }

    public function delete($service, $id) {
        $entity = $service->getOne($id);
        $entity->setState(1);
        $service->updateOne($entity);
    }

    public function read($service) {
        return $service->getAll();
    }

    public function update($service, $entity) {
        $service->updateOne($entity);
    }
    
    public function build_entity_object_list($service){
        $data = new \ArrayIterator();
        foreach ($this->read($service) as $obj){ 
            $data->append($service->getOne($obj->getId()));
        }
        return $data;
    }
    
    public function build_data_list($list){
        $data = new \ArrayIterator();
        foreach ($list as $item){ 
            $data->append($service->getOne($obj->getId()));
        }
        return $data;
    }

}
