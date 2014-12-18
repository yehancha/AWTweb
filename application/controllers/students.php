<?php

class Students extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('formview');
    }
    
    public function get_details() {
        $this->load->model('student_model');
        $data = $this->student_model->find($this->input->get('id'));
        $this->load->view('idview', $data);
    }
}
