<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student_data
 *
 * @author yehancha
 */
class Student_data {
    private $first_name = '';
    private $last_name = '';
    private $course = '';
    private $subject = '';
    private $level = 0;

    function __construct() {
        $this->first_name = 'Yehan';
        $this->last_name = 'Pemarathne';
    }
    
    function __destruct() {
        
    }
    
    function get_first_name() {
        for ($i = 0; $i < 5; $i++) {
            echo $this->first_name;
        }
        return $this->first_name;
    }
    
    function set_first_name($first_name) {
        $this->first_name = $first_name;
    }
    
    function get_last_name() {
        $x = 0;
        do {
            echo $this->last_name;
            $x++;
        } while ($x < 5);
        return $this->last_name;
    }
    
    function set_last_name($last_name) {
        $this->last_name = $last_name;
    }
    
    function get_course() {
        return $this->course;
    }
    
    function set_course($course) {
        $this->course = $course;
    }
    
    function get_subject() {
        return $this->subject;
    }
    
    function set_subject($subject) {
        $this->subject = $subject;
    }
    
    function get_level() {
        return $this->level;
    }
    
    function set_level($level) {
        $this->level = $level;
    }
}
