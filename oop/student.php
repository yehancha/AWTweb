<?php

class Student {
    private $name = '';
    private $id = '';
    private $course = '';
    
    function __construct() {
        $this->name = 'Yehan Pemarathne';
        $this->id = 2011073;
        $this->course = 'Software Engineering';
    }
    
    function get_name() {
        return $this->name;
    }
    
    function get_id() {
        return $this->id;
    }
    
    function get_course() {
        return $this->course;
    }
}
