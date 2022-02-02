<?php

class Comment extends Model
{
    public $DBNAME = 'comment';
    public function AnotherFullname()
    {
        $dbuser = new DBUserEngin();
        return $dbuser->getNameFamilyById($this->uid);
    }
}