<?php
if (!isset($_POST['submit'])) {
    View::IncludeForThis();
}else {
    $firstname = Data::get('firstname',$_POST);
    $lastname = Data::get('lastname',$_POST);
    $email = Data::get('email',$_POST);
    $city = Data::get('city',$_POST);
    $phone = Data::get('phone',$_POST);
    $password = Data::get('password',$_POST);
    //validation
    $validation = true;
    if (!filter_var($firstname,FILTER_SANITIZE_STRING)) {
        $validation = false;
        $ERORRS[]='نام وارد شده صحیح نیست!';
    }
    if (!filter_var($lastname,FILTER_SANITIZE_STRING)) {
        $validation = false;
        $ERORRS[]='نام خوانوادگی وارد شده صحیح نیست!';
    }
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $validation = false;
        $ERORRS[]='ایمیل وارد شده صحیح نیست!';
    }
    if (!filter_var($city,FILTER_SANITIZE_STRING)) {
        $validation = false;
        $ERORRS[] =' شهر وارد شده صحیح نیست !';
    }
    $phonRegex = "/^[0-9]{11}$/";
    if (!preg_match($phonRegex,$phone)) {
        $validation = false;
        $ERORRS[] =' شماره تلفن وارد شده صحیح نیست !';
    }
    $passRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W\_])[A-Za-z\d\W\_]{8,}$/";
    if (!preg_match($passRegex,$password)) {
        $validation = false;
        $ERORRS[] ='! رمز وارد شده صحصح نیست';
    }
    if (User::IsUniq($email)) {
        $validation = false;
        $ERORRS[] ='! ایمیل وارد شده در سیستم موجود است';
    }
    

    //final
    if (!$validation) {
        View::IncludeForThis();
    }else{
        $user = new User();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->city = $city;
        $user->phone = $phone;
        $user->password = sha1($password);
        $user->role = 'user';
        $userId = $user->Add();
        $dbuser = new DBUserEngin();
        $user = $dbuser->getBy_id($userId);
        // var_dump($user);
        Athuntication::loginUser($user);
        Rout::redirect_to_url('userpanel.dashboard');
    }
}
