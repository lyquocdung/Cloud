<?php
    require "lib/aws/sqs.php";
    require "lib/template.php";
    require "lib/validation.php";
    require "lib/url.php";
    require "lib/data.php";
    require "lib/employee.php";

    $mod = !empty($_GET["mod"])?$_GET["mod"]:"employee";
    $act = !empty($_GET["act"])?$_GET["act"]:"main";
    $path = "modules/{$mod}/{$act}.php";
?>
<?php
    if(file_exists($path)){
        require "$path";
    }
    else{
        require "inc/error.php";
    }
?>

