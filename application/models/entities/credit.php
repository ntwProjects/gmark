<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Credit
 * @author mundhaka
 * @Entity
 * @Table(name="credits")
 */
class Credit implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     * @Column(type="integer",nullable=false, name="value")
     * */
    private $value;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;
    
   /**
     * @OneToMany(targetEntity="lessonunit", mappedBy="credit")
     * */
    private $lesson_units;

    function __construct($value) {
        $this->value = $value;
        $this->state = 0;
        $this->lesson_units = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getValue() {
        return $this->value;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValue($value) {
        $this->value = $value;
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
