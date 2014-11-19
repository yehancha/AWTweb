<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dict
 *
 * @author yehancha
 */
class Dict extends CI_Controller {
    public function index()
    {
        $this->load->view('dictform');
    }
 
    public function lookup()
    {
        $typed = $this->input->get('t');
        if ($typed == null || $typed == '') {
            echo ''; // send back nothing if we got nothing
            exit;
        }
        $this->load->model('words');
        $wordlist = $this->words->match($typed);
        $this->output->set_content_type('text/xml');
        $this->load->view('wordview',array('words' => $wordlist));
    }
}