<?php

class Contact extends BaseContact
{

    static function getFieldKeyName($field)
    {
        return str_replace(" ", "_", substr($field['name'], 0, 10));
    }

}