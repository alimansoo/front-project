<?php
$dbcart = new DBCartEngin();
$dblike = new DBLikeProductEngin();
$dbbookmark = new DBProductBookmarkEngin();

switch ($router) {
    case Rout::url('product.addcart'):
        add_remove_Cart();
        break;
    case Rout::url('product.changeqty'):
        changeQty();
        break;
    case Rout::url('product.like'):
        likeProduct();
        break;
    case Rout::url('product.bookmark'):
        bookmarkProduct();
        break;
}

function add_remove_Cart(){
    global $dbcart;
    if (isset($_SESSION['id'])) {
        $status = '';

        $id = Data::get('pid',$_GET);

        $data = $dbcart->getBy_Pid_Uid($id,$_SESSION['id']);

        if (isset($data['id'])) {
            $data = $dbcart->deleteByid($data['id']);
            $output = array('status' => 200,'message' => 'محصول از سبد حذف شد.' );
        }else {
            $dbcart->add($id,$_SESSION['id']);
            $output = array('status' => 200,'message' => 'محصول به سبد اضافه شد.' ); 
        }
        if(isset($_GET['redirect'])){
            Rout::redirect_to_url('cart');
        }
    }
    else {
        $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
    }

    echo json_encode($output);
}


function changeQty(){
    global $dbcart;

    $action = Data::get('action',$_GET);
    $productid = Data::get('pid',$_GET);
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

        $id = Data::get('pid',$_GET);

        $data = $dblike->getBy_Pid_Uid($id,$_SESSION['id']);
        if (isset($data['id'])) {
            $data = $dblike->deleteByid($data['id']);
            $output = array('status' => 200,'message' => 'محصول شما دیسلایک شد.' );
        }else {
            $dblike->add($id,$_SESSION['id']);
            $output = array('status' => 200,'message' => 'محصول لایک شد.' );
        }
        if(isset($_GET['redirect'])){
            Rout::redirect_to_url('cart');
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

        $id = Data::get('pid',$_GET);

        $data = $dbbookmark->getBy_Pid_Uid($id,$_SESSION['id']);
        if (isset($data['id'])) {
            $data = $dbbookmark->deleteByid($data['id']);
            $output = array('status' => 200,'message' => 'محصول از ذخیره خارج شد.' );
        }else {
            $dbbookmark->add($id,$_SESSION['id']);
            $output = array('status' => 200,'message' => 'محصول ذخیره شد.' );
        }
        if(isset($_GET['redirect'])){
            Rout::redirect_to_url('cart');
        }
    }
    else {
        $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
    }

    echo json_encode($output);
}



