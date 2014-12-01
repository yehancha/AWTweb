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
class Book_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function search($type, $genre_id, $subgenre_id) {
        $where_clouses = array();
        if ($type != '') {
            $where_clouses['type'] = $type;
        }
        if ($genre_id != '') {
            $where_clouses['genre_id'] = $genre_id;
        }
        if ($subgenre_id != '') {
            $where_clouses['subgenre_id'] = $subgenre_id;
        }
        $res = null;
        if (count($where_clouses) > 0) {
            $res = $this->db->get_where('book', $where_clouses);
        } else {
            $res = $this->db->get('book');
        }
        $books = array();
        foreach ($res->result_array() as $row) {
            $books[] = $row;
        }
        return $books;
    }
}
