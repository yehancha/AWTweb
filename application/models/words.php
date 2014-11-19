<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of words
 *
 * @author yehancha
 */
class Words extends CI_Model {
    private $wordlist;
    function __construct()
    {
        parent::__construct();
        $this->wordlist = array('apple','applet','appropriate','applicable','aplenty');
    }
    public function match($partword)
    {
        $matching_words = array();
        foreach ($this->wordlist as $w) {
            if (preg_match("/$partword/",$w)) {
                $matching_words[] = $w;
            }
        }
        return $matching_words;
    }
}
