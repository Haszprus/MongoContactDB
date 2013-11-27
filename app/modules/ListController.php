<?php

abstract class ListController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->object = $this->getObject();
    }

    protected abstract function getObject();

    public function executeIndex()
    {
        $objects = $this->object->getList();

        $this->data[$this->controllerName] = $objects;
    }

    public function executeNew()
    {
        if (isset($_REQUEST[$this->controllerName])) {
            $this->object->save($_REQUEST[$this->controllerName]);
            $this->redirect($this->controllerName);
        }
    }

    public function executeEdit()
    {
        $this->executeNew();
        $this->data['doc'] = $this->object->getById($_REQUEST['id']);
    }

    public function executeDelete()
    {
        $this->object->delete($_REQUEST['id']);
        return self::$NO_TEMPLATE;
    }

}