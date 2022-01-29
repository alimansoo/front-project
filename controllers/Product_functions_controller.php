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

        $data = getCartBy_Pid_Uid($id,$_SESSION['id']);

        if (isset($data['id'])) {
            $data = deleteCartByid($data['id']);
            $output = array('status' => 200,'message' => 'محصول از سبد حذف شد.' );
        }else {
            insertCard($id,$_SESSION['id']);
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
    $action = $_GET['action'];
    $productid = $_GET['pid'];
    $userid = $_SESSION['id'];
    $cartid=null;
    $output = array();
    $data = getCartBy_Pid_Uid($productid,$userid);
    if (count($data) < 1) {
        die('not fount');
    }
    $cartid = $data['id'];
    
    $data = changeQtyCard($action,$cartid);

    switch ($data) {
        case -1:
            die('not found');
            break;
        case 0:
            $output = array('subject'=>'delete');
            break;
        default:
        $output = array('subject'=>'changed','qty'=>$data);
            break;
    }

    echo json_encode($output);
}
function likeProduct(){
    if (isset($_SESSION['id'])) {
        $status = '';

        $id = $_GET['pid'];

        $data = getLikeProductBy_Pid_Uid($id,$_SESSION['id']);
        if (isset($data['id'])) {
            $data = deleteLikeProductByid($data['id']);
            $output = array('status' => 200,'message' => 'محصول شما دیسلایک شد.' );
        }else {
            insertLikeProduct($id,$_SESSION['id']);
            $output = array('status' => 200,'message' => 'محصول لایک شد.' );
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
function bookmarkProduct(){
    if (isset($_SESSION['id'])) {
        $status = '';

        $id = $_GET['pid'];

        $data = getBookmarkProductBy_Pid_Uid($id,$_SESSION['id']);
        if (isset($data['id'])) {
            $data = deleteBookmarkProductByid($data['id']);
            $output = array('status' => 200,'message' => 'محصول از ذخیره خارج شد.' );
        }else {
            insertBookmarkProduct($id,$_SESSION['id']);
            $output = array('status' => 200,'message' => 'محصول ذخیره شد.' );
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



