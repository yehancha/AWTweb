<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of find
 *
 * @author yehancha
 */
class Find extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("student");
    }

    function index() {
        $this->load->view('lookupform'); // this generates the lookup form
    }

    function lookupById() {
        $student_id = $this->input->post('id');
        $student = $this->student->getById($student_id);
        // just for brevity, we'll echo the result here - you should use a view!
        echo implode(':', $student);
    }

    function lookupById_xml() {
        $student_id = $this->input->post('id');
        // $studentxml is a DOMDocument object
        $studentxml = $this->student->getById_xml($student_id);
        // tell browser we're sending back XML data
        $this->output->set_content_type('text/xml');
        // the saveXML() method on a DOMDocument object outputs the XML in string form...
        echo $studentxml->saveXML();
    }

}
