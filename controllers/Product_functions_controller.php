<?php
$dbcart = new DBCartEngin();
$dblike = new DBLikeProductEngin();
$dbbookmark = new DBProductBookmarkEngin();
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
    global $dbcart;
    if (isset($_SESSION['id'])) {
        $status = '';

        $id = $_GET['pid'];

        $data = $dbcart->getBy_Pid_Uid($id,$_SESSION['id']);

        if (isset($data['id'])) {
            $data = $dbcart->deleteByid($data['id']);
            $output = array('status' => 200,'message' => 'محصول از سبد حذف شد.' );
        }else {
            $dbcart->add($id,$_SESSION['id']);
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
    global $dbcart;

    $action = $_GET['action'];
    $productid = $_GET['pid'];
    $userid = $_SESSION['id'];
    $cartid=null;
    $output = array();
    $data = $dbcart->getBy_Pid_Uid($productid,$userid);
    if (count($data) < 1) {
        die('not fount');
    }
    $cartid = $data['id'];
    
    $data = $dbcart->changeQtyCard($action,$cartid);

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
    global $dblike;
    if (isset($_SESSION['id'])) {
        $status = '';

        $id = $_GET['pid'];

        $data = $dblike->getBy_Pid_Uid($id,$_SESSION['id']);
        if (isset($data['id'])) {
            $data = $dblike->deleteByid($data['id']);
            $output = array('status' => 200,'message' => 'محصول شما دیسلایک شد.' );
        }else {
            $dblike->add($id,$_SESSION['id']);
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
    global $dbbookmark;
    if (isset($_SESSION['id'])) {
        $status = '';

        $id = $_GET['pid'];

        $data = $dbbookmark->getBy_Pid_Uid($id,$_SESSION['id']);
        if (isset($data['id'])) {
            $data = $dbbookmark->deleteByid($data['id']);
            $output = array('status' => 200,'message' => 'محصول از ذخیره خارج شد.' );
        }else {
            $dbbookmark->add($id,$_SESSION['id']);
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



