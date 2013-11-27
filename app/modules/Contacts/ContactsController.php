<?php

class ContactsController extends ListController
{

    public function __construct()
    {
        parent::__construct();
        $fields = new Field();
        $this->data['fields'] = $fields->getList();
    }

    protected function getObject()
    {
        return new Contact();
    }

}