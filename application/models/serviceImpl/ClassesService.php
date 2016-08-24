<?php
namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use services\IClassesService,
    dmapimpl\Service;

require APPPATH . 'models/services/IClassesService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GenderServiceImpl
 *
 * @author mundhaka
 */
class ClassesService extends Service implements IClassesService {
    //put your code here
}
