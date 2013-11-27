<?php

class FieldsController extends ListController
{

    protected function getObject()
    {
        return new Field();
    }

}