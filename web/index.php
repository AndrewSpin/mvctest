<?php

require_once "../loader/loader.php";




$dataHandler = new DataHandler($data);

$modelCreater = new ModelCreator(new Model($dataHandler), 1);

$modelCreater->action();









?>