<?php



class ModelCreator
{
    protected $model;
    protected $view;

    public function __construct($model, $id)
    {
        $this->model = $model;
        $this->model->setVariables($id);

    }

    public function action()
    {
        $result = $this->model->getProduct();
        $this->view = new View();
        $this->view->render($result, 'index.php');

    }

    public function getName()
    {
        return $this->model->getName();
    }
}

