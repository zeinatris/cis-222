<?php
//Object class
class MyBaseObject{
    private $content;
    private $name;
    private $phone;
    //Construct
    function __construct($con,$ph,$na)
    {
        $this->content = $con;
        $this->name = $na;
        $this->phone = $ph;
    }
    //Getters and Setter
    function file_get_Content(){
        return $this->content;
    }

    function file_set_Content($con)
    {
        $this->content = $con;
    }

    function file_get_name(){
        $this->name;
    }

    function file_set_name($na)
    {
        $this->name = $na;
    }

    function file_get_phone(){
        $this->phone;
    }

    function file_set_phone($ph)
    {
            $this->phone = $ph;
    }
    //This shows the content
    function show()
    {
    echo '<h3>Homework 5</h3>';
    echo 'content: ' .  $this -> file_get_Content() . '<br>';
    echo 'Phone: ' .  $this -> file_get_phone() . '<br>';
    echo 'Name: ' .  $this -> file_get_name() . '<br>';
    }
}

