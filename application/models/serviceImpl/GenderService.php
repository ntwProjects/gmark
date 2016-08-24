<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use services\IGenderService,
        dmapimpl\Service;

require APPPATH . 'models/services/IGenderService.php';
require_once APPPATH.'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GenderServiceImpl
 *
 * @author mundhaka
 */
class GenderService extends Service implements IGenderService{
    //put your code here
}
