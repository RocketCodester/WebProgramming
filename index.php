<?php

//http://localhost/WebProgramming/index.php?list=user&orderby=name&direction=asc
//echo $_GET['list'] . "<br>";
//echo $_GET['orderby'] . "<br>";
//echo $_GET['direction'] . "<br>";

//http://localhost/WebProgramming/index.php?list=user&order[by]=name&order[dir]=asc
//echo $_GET['order']['by'] . "<br>";
//echo $_GET['order']['dir'] . "<br>";

if (!empty($_GET)){
    var_dump($_GET);
    echo $_SERVER['PHP_SELF'] . "<br>";
    $data = "Max & Ruby" . "<br>";
    echo "http://www.phparch.com/index.php?name="
        . urlencode ($data);
}

//http://localhost/WebProgramming/index.php
if (isset($_POST['login'])) {
    var_dump($_POST);
    if ($_POST['user'] == "admin" &&
        $_POST['pass'] == "secretpassword") {
        echo "Successful Login";
    }
}
?>

