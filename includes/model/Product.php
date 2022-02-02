<?php

class Product
{
    private $id;
    private $name;
    private $catg;
    private $price_component;
    private $price;
    private $image_src;
    private $isToCart=null;
    private $isLike=null;
    private $isBookmark=null;
    public function __construct($data=null)
    {
        if ($data === null) {
            return;
        }
        if (is_numeric($data) or is_int($data)) {
            $dbproduct = new DBProductEngin();
            $data = $dbproduct->getById($data);
        } elseif (!is_array($data)) {
            return;
        } elseif (
            //check value of data
            !isset($data['id']) or
            !isset($data['name']) or
            !isset($data['catg']) or
            !isset($data['price_component']) or
            !isset($data['price']) or 
            !isset($data['image_src'])
            ) {
            return;
        }
        $this->id=$data['id'];
        $this->name=$data['name'];
        $this->catg=$data['catg'];
        $this->price_component=$data['price_component'];
        $this->price=$data['price'];
        $this->image_src=$data['image_src'];
        if (Athuntication::isUser()) {
            $db = new DBCartEngin();
            $this->isToCart=$db->isContain($this->id,$_SESSION['id']);
            $db = new DBLikeProductEngin();
            $this->isLike=$db->isContain($this->id,$_SESSION['id']);
            $db = new DBProductBookmarkEngin();
            $this->isBookmark=$db->isContain($this->id,$_SESSION['id']);
        }  
    }
    public function __get($name)
    {
        switch ($name) {
            case 'id':
                return $this->id;
                break;
            case 'name':
                return $this->name;
                break;
            case 'catg':
                return $this->catg;
                break;
            case 'price_component':
                return $this->price_component;
                break;
            case 'price':
                return $this->price;
                break;
            case 'priceFormated':
                return number_format($this->price,0);
                break;
            case 'image_src':
                return getImageSource($this->image_src);
                break;
            case 'image_name':
                return $this->image_src;
                break;
            case 'isToCart':
                return $this->isToCart;
                break;
            case 'isLike':
                return $this->isLike;
                break;
            case 'isBookmark':
                return $this->isBookmark;
                break;
            default:
                return 0;
                break;
        }
    }
}