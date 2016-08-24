<?php
namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use services\IQuarterService,
    dmapimpl\Service;

require APPPATH . 'models/services/IQuarterService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GenderServiceImpl
 *
 * @author mundhaka
 */
class QuarterService extends Service implements IQuarterService {
    //put your code here
}
