<?php

class Order
{
    private $id;
    private $oid;
    private $pid;
    private $qty;
    public function __construct($data)
    {
        if (is_numeric($data) or is_int($data)) {
            $dbproduct = new DBUserOrderEngin();
            $data = $dbproduct->getById($data);
        } elseif (!is_array($data)) {
            return;
        } elseif (
            //check value of data
            !isset($data['id']) or
            !isset($data['oid']) or
            !isset($data['pid']) or
            !isset($data['qty']) 
            ) {
            return;
        }
        $this->id=$data['id'];
        $this->oid=$data['oid'];
        $this->pid=$data['pid'];
        $this->qty=$data['qty'];
    }
    public function __get($name)
    {
        switch ($name) {
            case 'id':
                return $this->id;
                break;
            case 'oid':
                return $this->uid;
                break;
            case 'pid':
                return $this->recive_date;
                break;
            case 'qty':
                return $this->saved_date;
            default:
                return 0;
                break;
        }
    }
}