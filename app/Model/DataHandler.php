<?php

namespace app\Model\DataHandler;

require_once "../../data/data.php";

class DataHandler
{
    protected $date;

    public function __construct($data)
    {
        $this->date=$data;
    }

    public function check()
    {
        echo "DataHendler Connect";
    }
}