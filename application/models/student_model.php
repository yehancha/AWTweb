<?php

class Student_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function find($id) {
        $student = array();
        $student['name'] = 'Yehan';
        $student['id'] = $id;
        $student['course'] = 'Software Engineer';
        return $student;
    }
}
