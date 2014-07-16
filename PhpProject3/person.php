<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of person
 *
 * @author USER
 */
class Person {
   
    
    
    
    
    class Person {
    public $first_name;
    public $middle_name;
    public $last_name;
    
    function get_full_name()
    {
        return $this->first_name. " ". $this->middle_name. " ". $this->last_name;
    }
    
    function get_reverse_name()
    {
        $full_name = $this->get_my_full_name();
        return strrev($full_name);
    } 


    
}
