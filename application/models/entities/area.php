<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Area
 * @author mundhaka
 * @Entity
 * @Table(name="areas")
 */
class Area implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="wording")
     * */
    private $wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="code")
     * */
    private $code;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;
    
     /**
     * @ManyToOne(targetEntity="country", inversedBy="areas", cascade="all")
     * @JoinColumn(name="country_id", nullable=false, referencedColumnName="id")
     * */
    private $country;
    
    /**
     * @OneToMany(targetEntity="prefecture", mappedBy="area")
     * */
    private $prefectures;

//    function __construct($wording, $code) {
//        $this->wording = $wording;
//        $this->code = $code;
//        $this->state = 0;
//        
//    }
    function __construct($wording, $code, $country) {
        $this->wording = $wording;
        $this->code = $code;
        $this->country = $country;
        $this->prefectures = new ArrayCollection();
    }

    function getCountryWording() {
        return $this->country->getWording();
    }
    
    function getId() {
        return $this->id;
    }

    function getWording() {
        return $this->wording;
    }

    function getCode() {
        return $this->code;
    }

    function getState() {
        return $this->state;
    }

    function getCountry() {
        return $this->country;
    }

    function getPrefectures() {
        return $this->prefectures;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setPrefectures($prefectures) {
        $this->prefectures = $prefectures;
    }

            
    /**
     * @see \Serializable::serialize()
     */
    public function serialize() {
        return serialize(array(
            $this->id
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized) {
        list (
                $this->id
                ) = unserialize($serialized);
    }

}
