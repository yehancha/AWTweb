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
class Student extends CI_Model {

    public function getById() {
        // just some dummy data for now
        return array('UG', 'Ly', 'Zo:ltan', 'BSc Computer Science');
    }

    public function getById_xml($sid) {
        // create DOMDocument object
        $root = new DOMDocument;
        // create root student node and add it to document DOM
        $student = $root->createElement("student");
        $root->appendChild($student);
        // now create firstname and lastname nodes and add them to root student node
        $firstname = $root->createElement("firstname", "Ly");
        $lastname = $root->createElement("lastname", "Zo:<ltan");
        $student->appendChild($firstname);
        $student->appendChild($lastname);
        return $root;
    }

}
