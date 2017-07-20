<?php
use app\Model\DataHandler\DataHandler;

$data = [
    "arr1" => ["id" => 1, "name" => "name1", "age" => "age1"],
    "arr2" => ["id" => 2, "name" => "name2", "age" => "age2"],
    "arr3" => ["id" => 3, "name" => "name3", "age" => "age3"]
];

$dataHandler = new DataHandler($data);

$dataHandler->check();
