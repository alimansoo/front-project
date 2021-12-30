<?php
$files = array();
if(isset($_POST['submit'])){
    $name = $_POST['name'];

    if (isset($_POST['controller'])) {
        $files['c'] = "controllers/".$name."_controller.php";
    }
    if (isset($_POST['view'])) {
        $files['v'] = "views/".$name."_view.php";
    }
    foreach ($files as $key=>$file) {
        $handle = fopen($file, "w");
        if($key == "c"){
            fwrite($handle,"<?php \nrequire '__init__.php';");
        }else if($key == "v"){
            fwrite($handle,"<?php \n require '__init__.php';");
        }
        fclose($handle);
    }
}else{
?>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="controller">Controller: </label>
        <input type="checkbox" name="controller" id="controller">

        <label for="view">View: </label>
        <input type="checkbox" name="view" id="view">

        <input type="submit" value="Submit" name="submit">
    </form>
<?php
}