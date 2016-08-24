<?php

namespace serviceImpl;

use services\IUserRoleService,
    daoImpl\UserRoleDAO;

//require APPPATH . 'models/serviceImpl/Service.php';
require_once APPPATH . 'models/services/IUserRoleService.php';
require_once APPPATH . 'models/daoImpl/UserRoleDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AgenceService
 *
 * @author Mick El
 */
class UserRoleService extends Service implements IUserRoleService {

    private $userRoleDAO;

    function __construct($entity) {
        parent::__construct($entity);
        $this->userRoleDAO = new UserRoleDAO($entity);
    }

    public function getOne($object) {
        return $this->userRoleDAO->getOne($object);
    }

}
