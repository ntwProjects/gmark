<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

//use Doctrine\Common\Collections\ArrayCollection;

/**
 * LessonUnit
 * @author mundhaka
 * @Entity
 * @Table(name="lesson_units")
 */
class LessonUnit implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="long_wording")
     * */
    private $long_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="medium_wording")
     * */
    private $medium_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="short_wording")
     * */
    private $short_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="description")
     * */
    private $description;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;
    
     /**
     * @ManyToOne(targetEntity="mention", inversedBy="lesson_units")
     * @JoinColumn(name="mention_id", nullable=false, referencedColumnName="id")
     * */
    private $mention;
    
     /**
     * @ManyToOne(targetEntity="credit", inversedBy="lesson_units")
     * @JoinColumn(name="credit_id", nullable=false, referencedColumnName="id")
     * */
    private $credit;

    function __construct($long_wording, $medium_wording, $short_wording, $description) {
        $this->long_wording = $long_wording;
        $this->medium_wording = $medium_wording;
        $this->short_wording = $short_wording;
        $this->description = $description;
        $this->state = 0;
    }

    function getId() {
        return $this->id;
    }

    function getLong_wording() {
        return $this->long_wording;
    }

    function getMedium_wording() {
        return $this->medium_wording;
    }

    function getShort_wording() {
        return $this->short_wording;
    }

    function getDescription() {
        return $this->description;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLong_wording($long_wording) {
        $this->long_wording = $long_wording;
    }

    function setMedium_wording($medium_wording) {
        $this->medium_wording = $medium_wording;
    }

    function setShort_wording($short_wording) {
        $this->short_wording = $short_wording;
    }

    function setDescription($description) {
        $this->description = $description;
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
