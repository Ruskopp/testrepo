<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrelistavanjeRestoranaCtrl
 *
 * @author Marko
 */
class PrelistavanjeRestoranaCtrl extends CI_Controller {

    public function index() {
        $this->load->model('UserValidationModel');
        $this->UserValidationModel->checkSession();
        $this->load->model('BusinessLogic');

        $data['restorani'] = $this->BusinessLogic->getAllRestaurants();
        $this->load->view('PrelistavanjeRestoranaView', $data);
    }

    public function restoranDetails($id) {
        $this->load->model('UserValidationModel');
        $this->UserValidationModel->checkSession();
        $this->load->model('BusinessLogic');
        
        $data['restoran'] = $this->BusinessLogic->getRestaurant($id);
        $this->load->view('RezervisanjeStolaView', $data);
    }

}