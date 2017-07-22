<?php



class View
{
    public function render($result, $template)
    {

    include __DIR__."/views/".$template;

    die();
    }

}

?>