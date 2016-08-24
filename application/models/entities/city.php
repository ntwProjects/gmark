<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

//use Doctrine\Common\Collections\ArrayCollection;
//
// * @InheritanceType("SINGLE_TABLE")
// * @DiscriminatorColumn(name="dtype", type="string")
// * @DiscriminatorMap({"co" = "Communal"})
/**
 * city
 * @author mundhaka
 * @DiscriminatorMap({"ci" = "City"})
 * @Entity
 */
abstract class City extends Communal {

    
}

