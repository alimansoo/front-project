<?php
class Product extends Model
{
    public $DBNAME = 'product';
    public function Image_Source()
    {
        return SITE_URL.ASSETS_PATH.'images/products/'.$this->image_src;
    }
    public function Price_Fromated()
    {
        return number_format($this->price,0);
    }
    public function Is_Like()
    {
        if (Athuntication::isUser()) {
            $db = new DBLikeProductEngin();
            $result = $db->isContain($this->id,$_SESSION['id']);
            if ($result) {
                return true;
            }
            return false;
        }else{
            return null;
        }
    }
    public function Is_Bookmark()
    {
        if (Athuntication::isUser()) {
            $db = new DBProductBookmarkEngin();
            $result = $db->isContain($this->id,$_SESSION['id']);
            if ($result) {
                return true;
            }
            return false;
        }else{
            return null;
        }
    }
    public function Is_Cart()
    {
        if (Athuntication::isUser()) {
            $db = new DBCartEngin();
            $result = $db->isContain($this->id,$_SESSION['id']);
            if ($result) {
                return true;
            }
            return false;
        }else{
            return null;
        }
    }
    static function GenerateImageName(){
        return rand(100000,1000000).'.jpg';
    }
}