<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegKorController
 *
 * @author Marko
 */
class RegKorController extends CI_Controller{
    
    public function index(){
        $this->load->helper('url');
         $this->load->helper('form');
        $this->load->view('01-Registracija korisnika');
        
    }
    
    public function submit(){
        
        $this->load->model('registrationModel');
        
        $this->load->helper('url');
  
        if ( $this->registrationModel->read_validate_make_Korisnik())
        {           
        $this->load->view('05-Logovanje');
        }
    else
        {
        $this->load->view('01-Registracija korisnika');

        }  
        
    }

    
    
}
