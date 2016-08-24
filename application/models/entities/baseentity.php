<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

class Baseentity implements \Serializable {

    /**
      @version string
      @Column(nullable = false)
     */
    protected $version = 1;
    
    function __construct() {
        
    }
    public function getVersion() {
        return $this->version;
    }

    public function setVersion($version) {
        $this->version = $version;
    }

    public function serialize() {
        
    }

    public function unserialize($serialized) {
        
    }

}
