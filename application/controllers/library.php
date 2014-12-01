<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of library
 *
 * @author yehancha
 */
class Library extends CI_Controller {
    function _remap() {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            $this->search();
        }
    }
            
    function search() {
//        $path_elements = explode('/', $this->input->server('PATH_INFO'));
        $type = null;
        $genre_id = null;
        $subgenre_id = null;
//        if (isset($path_elements[2])) {
//            if ($path_elements[2] == 'type') {
//                $type = $path_elements[3];
//            }
//        }
//        if (isset($path_elements[4])) {
//            if ($path_elements[4] == 'subgenre') {
//                $subgenre_id = $path_elements[5];
//            }
//        }
        
        $path_elements = $this->uri->uri_to_assoc(2);
        if (isset($path_elements['type'])) {
            $type = $path_elements['type'];
        }
        if (isset($path_elements['subgenre_id'])) {
            $subgenre_id = $path_elements['subgenre_id'];
        }
        
        $this->load->model('book_model');
        $books = $this->book_model->search($type, $genre_id, $subgenre_id);
        $this->load->view('book_display', array('books' => $books));
    }
}
