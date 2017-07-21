<?php

class DataHandler
{
    protected $date;

    public function __construct($data)
    {
        $this->date=$data;
    }

    public function getProductById($id)
    {
        return $this->date["$id"];
    }

    public function check()
    {
        echo "DataHendler Connect";
    }
}