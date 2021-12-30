<?php
require_once("__init__.php");

$cdb = new db($dbhost,$dbusername,$dbpassword,$dbname);
$query = "INSERT INTO 
ticket(title,subject,name,email,text)
VALUES('{$_POST["title"]}',{$_POST["subject"]},'{$_POST["name"]}','{$_POST["email"]}','{$_POST["text"]}')";
$result = $cdb -> query($query);
if ($cdb -> error) {
    echo $cdb -> error;
} else {
    echo '<div class="success-alert">موفقیت امیز</div>';
}
$cdb -> close();


