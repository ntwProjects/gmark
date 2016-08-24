<?php

namespace daoImpl;

use dao\IAreaDAO,
    dmapimpl\DAO;

use Doctrine\Common\Collections\ArrayCollection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IAreaDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of GenderDAO
 *
 * @author mundhaka
 */
class AreaDAO extends DAO implements IAreaDAO {

    private $list;

    public function getJoinAll() {
        $query = $this->em->createQuery("SELECT e FROM entities\\" . $this->entity . " e join e.country c");
        $this->list = new ArrayCollection();
        try {
            $this->list = $query->getResult();
            foreach ($this->list as $item) {
                if ($item->getState() != 0) {
                    $this->list->removeElement($item);
                }
            }
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $this->list;
    }
    
}
