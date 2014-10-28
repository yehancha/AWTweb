<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of products
 *
 * @author yehancha
 */
class Products extends CI_Controller {
    public function index() {
        $this->load->view("product_lookup");
    }
    
    public function find() {
        $userType = $this->input->get('PRODUCT_TYPE');
        $this->load->model('Product_model');
        $data['query'] = $this->Product_model->lookup($userType);
        $this->load->view('product_display', $data);
    }
}
