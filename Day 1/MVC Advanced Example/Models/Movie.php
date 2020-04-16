<?php

class Movie
{
    // * Properties
    private $_id;
    private $_title;
    private $_realease_date;
    private $_description;
    private $_comments = array();
    // * Methods

    public function __set($name, $value)
    {
        // var_dump($name, $value);
        $name = '_' . $name;
        $this->$name = $value;
    }

    // ? Should use the name alteration in get
    public function __get($name)
    {
        return $this->$name;
    }

    // // * Getters

    // public function get_id()
    // {
    //     return $this->_id;
    // }
    // public function get_title()
    // {
    //     return $this->_title;
    // }
    // public function get_description()
    // {
    //     return $this->_description;
    // }
    // public function get_release_date()
    // {
    //     return $this->_realease_date;
    // }
    // public function get_comments()
    // {
    //     return $this->_comments;
    // }
}
