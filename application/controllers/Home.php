<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Marko
 */
class Home extends CI_Controller {
    
    public function index(){
        $this->load->model("entities/restoran");
        
        $em = $this->doctrine->em;
        $qb = $em->createQueryBuilder();
        
        $qb->select('r')
        ->from('restoran', 'r');
        
        $data['restorani'] = $qb->getQuery()->getResult();
        
        $this->load->view('17-Pogled gosta na sistem',$data);
        
    }
    
}