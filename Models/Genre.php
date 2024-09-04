<?php

class Genre
{
    public $name;
    public $description;

    function __construct($_name)
    {
        $this->name = $_name;
    }

    public function setDescription($_description)
    {
        $this->description = $_description;
    }
}
