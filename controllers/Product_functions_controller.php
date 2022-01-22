<?php
switch ($router) {
    case get_URL('product.addcart'):
        add_remove_Cart();
        break;
    case get_URL('product.changeqty'):
        changeQty();
        break;
    case get_URL('product.like'):
        likeProduct();
        break;
    case get_URL('product.bookmark'):
        bookmarkProduct();
        break;
}

function add_remove_Cart(){
    if (isset($_SESSION['id'])) {
            
        
        $status = '';

        $id = $_GET['pid'];

        $mysql =  new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

        $query = "SELECT * FROM `cards` WHERE pid = ? AND uid = ?";
        $result = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();

        $userquery = "UPDATE `user` SET `card_changed`=true WHERE id=?";
        $userresult = $mysql->query($userquery,$_SESSION['id']);

        if (isset($result['id'])) {
            $query = "DELETE FROM `cards` WHERE id = ? ;";
            $result = $mysql->query($query,$result['id']);
            $output = array('status' => 200,'message' => 'محصول از سبد حذف شد.' );
        }else {
            $query = "INSERT INTO `cards`(`pid`, `uid`, `qty`) VALUES (?,?,1)";
            $result = $mysql->query($query,$id,$_SESSION['id']);
            $output = array('status' => 200,'message' => 'محصول به سبد اضافه شد.' ); 
        }
        if(isset($_GET['redirect'])){
            redirect_to(get_Full_URL('cart'));
        }
    }
    else {
        $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
    }

    echo json_encode($output);
}


function changeQty(){
    $subject = $_GET['action'];
    $productid = $_GET['pid'];
    $userid = $_SESSION['id'];
    $productqty=0;
    $cartid=null;
    $output = array();

    $mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

    $query = "SELECT * FROM `cards` WHERE uid = ? AND pid=?";
    $result = $mysql->query($query,$userid,$productid)->fetchArray();
    $productqty = $result['qty'];
    $cartid = $result['id'];

    switch ($subject) {
        case 'add':
            $productqty++;
            break;
        case 'minus':
            $productqty--;
            break;
    }

    if($productqty<1){
        $query = "DELETE FROM `cards` WHERE id=?";
        $result = $mysql->query($query,$cartid);
        $output['subject'] = 'delete';    
        $output['pid'] = $productid;       
    }else{
        $query = "UPDATE `cards` SET `qty`=? WHERE id=?";
        $result = $mysql->query($query,$productqty,$cartid);
        $output['subject'] = 'changed';   
        $output['pid'] = $productid;     
        $output['qty'] = $productqty; 
    }
    echo json_encode($output);

}
function likeProduct(){
    if (isset($_SESSION['id'])) {
        
        $status = '';
    
        $id = $_GET['pid'];
    
        $mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);
    
        $query = "SELECT * FROM `likeproduct` WHERE pid = ? AND uid = ?";
        $result = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();
    
        $output = array('status' => 0);
    
    
        if (isset($result['id'])) {
            $query = "DELETE FROM `likeproduct` WHERE id = ? ;";
            $result = $mysql->query($query,$result['id']);
    
            $output = array('status' => 200,'message' => 'محصول شما دیسلایک شد.' );
        }else {
            $query = "INSERT INTO `likeproduct`(`pid`, `uid`) VALUES (?,?)";
            $result = $mysql->query($query,$id,$_SESSION['id']);
    
            $output = array('status' => 200,'message' => 'محصول لایک شد.' );
        }
    }
    else {
        $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
    }
    
    
    
    echo json_encode($output);
}
function bookmarkProduct(){
        
    $status = '';

    $id = $_GET['pid'];

    $mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

    $query = "SELECT * FROM `bookmarkproduct` WHERE pid = ? AND uid = ?";
    $result = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();

    $output = array('status' => 0);

    if (isset($result['id'])) {
        $query = "DELETE FROM `bookmarkproduct` WHERE id = ? ;";
        $result = $mysql->query($query,$result['id']);

        $output = array('status' => 200,'message' => 'محصول از ذخیره خارج شد.' );

    }else {
        $query = "INSERT INTO `bookmarkproduct`(`pid`, `uid`) VALUES (?,?)";
        $result = $mysql->query($query,$id,$_SESSION['id']);

        $output = array('status' => 200,'message' => 'محصول ذخیره شد.' );
    }

    echo json_encode($output);
}



