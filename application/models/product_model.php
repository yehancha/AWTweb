<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product_model
 *
 * @author yehancha
 */
class Product_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    public function lookup($productType) {
        return [$productType, "TV", "Radio", "PC", "Notebook", "Phone"];
    }
    
//    function __construct() {
//        parent::__construct();
//        $this->load->database();
//    }
//    
//    public function lookup($productType) {
//        $this->db->where('name', $productType);
//        $results = $this->db->get('producttype');
//        $returnData = array();
//        foreach ($results->result() as $value) {
//            $returnData[] = $value->name;
//        }
//        return $returnData;
//    }
}
