<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of book
 *
 * @author yehancha
 */
class Book extends CI_Controller {
    function index() {
        $this->load->view('library_view');
    }
}
