<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use services\ICountryService,
        dmapimpl\Service;

require APPPATH . 'models/services/ICountryService.php';
require_once APPPATH.'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GenderServiceImpl
 *
 * @author mundhaka
 */
class CountryService extends Service implements ICountryService{
    //put your code here
}