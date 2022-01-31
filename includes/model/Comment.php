<?php

class Comment
{
    private $id;
    private $pid;
    private $uid;
    private $subject;
    private $message;
    private $anotherFullname;
    public function __construct($data)
    {
        if (is_numeric($data) or is_int($data)) {
            $dbproduct = new DBCommentEngin();
            $data = $dbproduct->getById($data);
        } elseif (!is_array($data)) {
            return;
        } elseif (
            //check value of data
            !isset($data['id']) or
            !isset($data['pid']) or
            !isset($data['uid']) or
            !isset($data['subject']) or
            !isset($data['message']) 
            ) {
            return;
        }
        $this->id=$data['id'];
        $this->pid=$data['pid'];
        $this->uid=$data['uid'];
        $this->subject=$data['subject'];
        $this->message=$data['message'];
        $dbuser = new DBUserEngin();
        $this->anotherFullname = $dbuser->getNameFamilyById($this->uid);
        unset($dbuser);
    }
    public function __get($name)
    {
        switch ($name) {
            case 'id':
                return $this->id;
                break;
            case 'pid':
                return $this->pid;
                break;
            case 'uid':
                return $this->uid;
                break;
            case 'subject':
                return $this->subject;
            case 'message':
                return $this->message;
                break;
            case 'anotherFullname':
                return $this->anotherFullname;
            default:
                return 0;
                break;
        }
    }
}