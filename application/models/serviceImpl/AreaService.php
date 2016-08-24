<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use services\IAreaService,
    dmapimpl\Service,
    daoImpl\AreaDAO;

require APPPATH . 'models/services/IAreaService.php';
require APPPATH . 'models/daoImpl/AreaDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GenderServiceImpl
 *
 * @author mundhaka
 */
class AreaService extends Service implements IAreaService {

    private $dao;

    function __construct() {
        $this->dao = new AreaDAO("Area");
    }

    public function getJoinAll() {
        return $this->dao->getJoinAll();
    }

}
