<?php
class User extends Model
{
    public $DBNAME = 'user';
    static public function IsUniq($email){
        $dbuser = new DBUserEngin();
        $result = $dbuser->GetFilds('email',['email'=>$email]);
        if (count($result) > 0) {
            return true;
        }
        return false;
    }
}