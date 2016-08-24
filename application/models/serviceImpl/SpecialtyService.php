<?php
namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use services\ISpecialtyService,
    dmapimpl\Service;

require APPPATH . 'models/services/ISpecialtyService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GenderServiceImpl
 *
 * @author mundhaka
 */
class SpecialtyService extends Service implements ISpecialtyService {
    //put your code here
}
