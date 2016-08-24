<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use services\ISessionService,
        dmapimpl\Service;

require APPPATH . 'models/services/ISessionService.php';
require_once APPPATH.'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GenderServiceImpl
 *
 * @author mundhaka
 */
class SessionService extends Service implements ISessionService{
    //put your code here
}
