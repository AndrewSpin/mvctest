<?php

class Model{

    protected $data;
    protected $poduct;
    protected $id;
    protected $name;
    protected $age;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function setVariables($id)
    {
        $this->product = $this->data->getProductById($id);
        $this->id = $this->product["id"];
        $this->name = $this->product["name"];
        $this->age = $this->product["age"];
    }

    /**
     * @return array
     */
    public function getProduct()
    {
        return $this->product;

    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    public function check()
    {
        echo "ModelCreater Connect";
    }
}
