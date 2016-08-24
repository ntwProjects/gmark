<?php
namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Communal
 * @author mundhaka
 * @Entity
 * @Table(name="communals")
 */
class Communal implements \Serializable {

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
     * @ManyToOne(targetEntity="prefecture", inversedBy="communals")
     * @JoinColumn(name="prefecture_id", nullable=false, referencedColumnName="id")
     * */
    private $prefecture;
    
    /**
     * @OneToMany(targetEntity="quarter", mappedBy="communal")
     * */
    private $quarters;

    function __construct($wording, $code) {
        $this->wording = $wording;
        $this->code = $code;
        $this->state = 0;
        $this->quarters = new ArrayCollection();
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

    function getPrefecture() {
        return $this->prefecture;
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

    function setPrefecture($prefecture) {
        $this->prefecture = $prefecture;
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
