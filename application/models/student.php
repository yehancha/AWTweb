<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student
 *
 * @author yehancha
 */

include_once 'StudentData.php';

class Student extends CI_Model {

    public function getById() {
        // just some dummy data for now
//        return array('mode' => 'UG','firstname' => 'Ly','lastname' => 'Zoltan','course' => 'BSc Computer Science');
        
        $student = new StudentData();
        $student->firstName = 'Ly';
        $student->lastName = 'Zoltan';
        $student->level = 6;
        return $student;
    }

    public function getById_xml($sid) {
        // create DOMDocument object
        $root = new DOMDocument;
        $class = $root->createElement("class");
        $root->appendChild($class);
        
        $student1 = $root->createElement("student");
        $class->appendChild($student1);
        $firstname = $root->createElement("firstname", "Ly");
        $lastname = $root->createElement("lastname", "Zoltan");
        $student1->appendChild($firstname);
        $student1->appendChild($lastname);
        
        $student2 = $root->createElement("student");
        $class->appendChild($student2);
        $firstname = $root->createElement("firstname", "Bob");
        $lastname = $root->createElement("lastname", "Smith");
        $student2->appendChild($firstname);
        $student2->appendChild($lastname);
        
        return $root;
    }

}
