<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * MappedSuperclass
 */

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Country
 * @author mundhaka
 * @Entity
 * @MappedSuperclass
 * @Table(name="countries")
 */
class Country implements \Serializable {

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
     * @var string
     * @Column(type="string", nullable=false, name="nationality")
     * */
    private $nationality;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;
    
     /**
     * @OneToMany(targetEntity="area", mappedBy="country", cascade="all")
     * */
    private $areas;

    function __construct($wording, $code, $nationality) {
        $this->wording = $wording;
        $this->code = $code;
        $this->nationality = $nationality;
        $this->areas = new ArrayCollection();
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

    function getNationality() {
        return $this->nationality;
    }

    function getState() {
        return $this->state;
    }

    function getAreas() {
        return $this->areas;
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

    function setNationality($nationality) {
        $this->nationality = $nationality;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setAreas($areas) {
        $this->areas = $areas;
    }
    
    public function __toString() {
       return $this->getWording(); 
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
