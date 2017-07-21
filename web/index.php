<?php

require_once "../data/data.php";
require_once "../app/Model/DataHandler.php";
require_once "../app/Model/Model.php";




$dataHandler = new DataHandler($data);

$model = new Model($dataHandler, 2);





var_dump($model->getAge());



?>