<?php

class Order
{
    private $id;
    private $uid;
    private $recive_date;
    private $saved_date;
    private $addres;
    private $priceAll;
    private $transport_price;
    private $reciver_name;
    private $is_pay;
    public function __construct($data=null)
    {
        if ($data === null) {
            return;
        }
        if (is_numeric($data) or is_int($data)) {
            $dbproduct = new DBUserOrderEngin();
            $data = $dbproduct->getById($data);
        } elseif (!is_array($data)) {
            return;
        } elseif (
            //check value of data
            !isset($data['id']) or
            !isset($data['uid']) or
            !isset($data['recive_date']) or
            !isset($data['saved_date']) or
            !isset($data['addres']) or 
            !isset($data['priceAll']) or
            !isset($data['transport_price']) or 
            !isset($data['reciver_name']) or
            !isset($data['is_pay']) 
            ) {
            return;
        }
        $this->id=$data['id'];
        $this->uid=$data['uid'];
        $this->recive_date=$data['recive_date'];
        $this->saved_date=$data['saved_date'];
        $this->addres=$data['addres'];
        $this->priceAll=$data['priceAll'];
        $this->transport_price=$data['transport_price'];
        $this->reciver_name=$data['reciver_name'];
        $this->is_pay=$data['is_pay'];
    }
    public function __get($name)
    {
        switch ($name) {
            case 'id':
                return $this->id;
                break;
            case 'uid':
                return $this->uid;
                break;
            case 'recive_date':
                return $this->recive_date;
                break;
            case 'saved_date':
                return $this->saved_date;
                break;
            case 'addres':
                return $this->addres;
                break;
            case 'priceAll':
                return $this->priceAll;
                break;
            case 'transport_price':
                return $this->transport_price;
                break;
            case 'reciver_name':
                return $this->reciver_name;
                break;
            case 'is_pay':
                return $this->is_pay;
                break;
            default:
                return 0;
                break;
        }
    }
}