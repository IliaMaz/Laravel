<?php

class Comment
{
    // * Properties
    private $_id;
    private $_comment;
    private $_movie_id;
    // * Methods

    public function __set($name, $value)
    {
        $name = '_' . $name;
        $this->$name = $value;
    }

    public function __get($name)
    {
        $name = '_' . $name;
        return $this->$name;
    }
}
