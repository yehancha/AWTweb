<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of auth
 *
 * @author yehancha
 */
class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('authlib');
        $this->load->helper('url');
    }

    public function index() {
        redirect('/auth/login'); // url helper function
    }

    public function register() {
        $this->load->view('register_view', array('errmsg' => ''));
    }

    public function createaccount() {
        $name = $this->input->post('name');
        $username = $this->input->post('uname');
        $password = $this->input->post('pword');
        $conf_password = $this->input->post('conf_pword');

        if (!($errmsg = $this->authlib->register($name, $username, $password, $conf_password))) {
            redirect('/auth/login');
        } else {
            $data['errmsg'] = $errmsg;
            $this->load->view('register_view', $data);
        }
    }

    public function login() {
        $data['errmsg'] = '';
        $this->load->view('login_view', $data);
    }

    public function authenticate() {
        $username = $this->input->post('uname');
        $password = $this->input->post('pword');
        $user = $this->authlib->login($username, $password);
        if ($user !== false) {
            $this->load->view('homepage', array('name' => $user['name']));
        } else {
            $data['errmsg'] = 'Unable to login - please try again';
            $this->load->view('login_view', $data);
        }
    }
}
