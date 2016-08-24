<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

//use Doctrine\Common\Collections\ArrayCollection;

/**
 * AcademicYear
 * @author mundhaka
 * @Entity
 * @Table(name="academicyears")
 */
class AcademicYear implements \Serializable {

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
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($wording) {
        $this->wording = $wording;
        $this->state = 0;
    }

    function getId() {
        return $this->id;
    }

    function getWording() {
        return $this->wording;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setState($state) {
        $this->state = $state;
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
