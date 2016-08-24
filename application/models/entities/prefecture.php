<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Prefecture
 * @author mundhaka
 * @Entity
 * @Table(name="prefectures")
 */
class Prefecture implements \Serializable {

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
     * @ManyToOne(targetEntity="area", inversedBy="prefectures")
     * @JoinColumn(name="area_id", nullable=false, referencedColumnName="id")
     * */
    private $area;
    
     /**
     * @OneToMany(targetEntity="communal", mappedBy="prefecture")
     * */
    private $communals;

    function __construct($wording, $code) {
        $this->wording = $wording;
        $this->code = $code;
        $this->state = 0;
        $this->communals = new ArrayCollection();
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

    function getArea() {
        return $this->area;
    }

    function getCommunals() {
        return $this->communals;
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

    function setArea($area) {
        $this->area = $area;
    }

    function setCommunals($communals) {
        $this->communals = $communals;
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
