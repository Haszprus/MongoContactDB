<?php

class Field extends BaseField
{


    public function save(array $post){

        $post['options'] = str_replace("\r\r", "\r", trim($post['options']));
        $post['options'] = explode("\r\n", $post['options']);

        return parent::save($post);
    }
}