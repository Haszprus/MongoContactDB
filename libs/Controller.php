<?php

class Controller
{
    protected $data = array();

    public $controllerName;

    public static $NO_TEMPLATE = 'This Controller Action should be rendered without a template or layout.';

    public function __construct()
    {

    }

    public function getData()
    {
        return $this->data;
    }

    public function redirect($to)
    {
        header("location: ?r=$to");
    }
}