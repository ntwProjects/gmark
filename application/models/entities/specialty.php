<?php
namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Specialty
 * @author mundhaka
 * @Entity
 * @Table(name="specialties")
 */
class Specialty implements \Serializable {

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
     * @ManyToOne(targetEntity="domain", inversedBy="specialties")
     * @JoinColumn(name="domain_id", nullable=false, referencedColumnName="id")
     * */
    private $domain;
    
    /**
     * @OneToMany(targetEntity="career", mappedBy="specialty")
     * */
    private $careers;

    function __construct($long_wording, $medium_wording, $short_wording, $description) {
        $this->long_wording = $long_wording;
        $this->medium_wording = $medium_wording;
        $this->short_wording = $short_wording;
        $this->description = $description;
        $this->state = 0;
        $this->careers = new ArrayCollection();
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
