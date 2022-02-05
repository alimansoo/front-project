<?php
$dbuser = new DBUserEngin();
if (!isset($_POST['submit'])) {
    View::IncludeForThis();
}else {
    $email = Data::get('email',$_POST);
    $password = sha1(Data::get('password',$_POST));
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        Erorre::Add('ایمیل وارد شده صحیح نیست!');
    }
    $data = $dbuser->getBy_username_password(
        $email,$password
    );
    if (!$data) {
        Erorre::Add('! کاربر پیدا نشد');
    }
    
    if (Erorre::IsContain()) {
        View::IncludeForThis();
    }else{
        //set sessions
        Athuntication::loginUser($data);
        $role = Data::get('role',$_SESSION);
        switch ($role) {
            case 'user':
                Rout::redirect_to_url('userpanel.dashboard');
                break;
            case 'admin':
                Rout::redirect_to_url('adminpanel.dashboard');
                break;
            default:
                die("error");
        }
    }
}