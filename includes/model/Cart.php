<?php
class Cart
{
    private $id;
    private $pid;
    private $uid;
    private $qty;
    public function __construct($data)
    {
        if (is_numeric($data) or is_int($data)) {
            $dbproduct = new DBCartEngin();
            $data = $dbproduct->getBy_id($data);
        } elseif (!is_array($data)) {
            return;
        } elseif (
            //check value of data
            !isset($data['id']) or
            !isset($data['pid']) or
            !isset($data['uid']) or
            !isset($data['qty']) 
            ) {
            return;
        }
        $this->id=$data['id'];
        $this->pid=$data['pid'];
        $this->uid=$data['uid'];
        $this->qty=$data['qty'];
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
            case 'qty':
                return $this->qty;
                break;
            default:
                return 0;
                break;
        }
    }
}
