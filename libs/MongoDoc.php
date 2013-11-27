<?php

class MongoDoc
{

    protected $collectionName = null;
    protected $collection = null;

    public function __construct()
    {
        $this->db = App::mongo()->contactdb;
        $this->collection = $this->db->{$this->collectionName};
    }


    public function getList()
    {
        $list = $this->collection->find();

        $docs = array();

        foreach ($list as $mongoid => $doc) {
            $docs[$mongoid] = $doc;
        }

        return $docs;
    }

    public function getById($id)
    {
        return $this->collection->findOne(array('_id' => new MongoId($id)));
    }

    public function save(array $post)
    {
        if (isset($post['_id']) && is_string($post['_id']) && strlen($post['_id']) == 24)
        {
            $post['_id'] = new MongoId($post['_id']);
        }
        $this->collection->save($post);
    }

    public function delete($id)
    {
        return $this->collection->remove(array('_id' => new MongoId($id)));
    }

}