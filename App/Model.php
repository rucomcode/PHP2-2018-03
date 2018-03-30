<?php

namespace App;

abstract class Model
{

    public const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = new Db();

        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query(
            $sql,
            [],
            static::class
        );
    }

    public function insert()
    {
        $fields = get_object_vars($this);

        $cols = [];
        $data = [];

        foreach ($fields as $name => $value) {
            if ('id' == $name) {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }

        $sql = '
INSERT INTO ' . static::TABLE . ' 
    (' . implode(',', $cols) . ') 
VALUES 
    (' . implode(',', array_keys($data)) . ')
';
        $db = new Db();
        $db->execute($sql, $data);

        $this->id = $db->getLastId();
    }

}