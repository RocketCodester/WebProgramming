<?php

//http://localhost/WebProgramming/index.php?list=user&orderby=name&direction=asc
//echo $_GET['list'] . "<br>";
//echo $_GET['orderby'] . "<br>";
//echo $_GET['direction'] . "<br>";

//http://localhost/WebProgramming/index.php?list=user&order[by]=name&order[dir]=asc
//echo $_GET['order']['by'] . "<br>";
//echo $_GET['order']['dir'] . "<br>";

//get.php
if (!empty($_GET)){
    var_dump($_GET);
    echo $_SERVER['PHP_SELF'] . "<br>";
    $data = "Max & Ruby" . "<br>";
    echo "http://www.phparch.com/index.php?name="
        . urlencode ($data);
}

//post.php
if (isset($_POST['login'])) {
    var_dump($_POST);
    if ($_POST['user'] == "admin" &&
        $_POST['pass'] == "secretpassword") {
        echo "Successful Login";
    }
}

//post2.php
if (isset($_POST['languages'])) {
    var_dump($_POST);
    foreach ($_POST['languages'] as $language) {
        switch ($language) {
            case 'PHP' :
                echo "PHP? Awesome! <br />";
                break;
            case 'Perl' :
                echo "Perl? Ew. Just Ew. <br />";
                break;
            case 'Ruby' :
                echo "Ruby? Can you say... 'bandwagon?' <br />";
                break;
            default:
                echo "Unknown language!";
        }
    }
}

//fileupload.php
if (isset($_FILES) && $_FILES['filedata']['error'] == UPLOAD_ERR_OK && $_FILES['filedata']['size'] != 0 && $_FILES['filedata']['tmp_name'] != 'none' && is_uploaded_file($_FILES['filedata']['tmp_name'])) {
    $info = new SplFileInfo(basename($_FILES['filedata']['tmp_name']));
    $serverFileName = '0.' . $info->getExtension();
    $files = [$serverFileName => basename($_FILES['filedata']['tmp_name'])];
    move_uploaded_file($_FILES['filedata']['tmp_name'], "C:\Users\\" . get_current_user(). "\\Desktop\\" . $serverFileName); //uses is_uploaded_file
    var_dump($_FILES);
}
?>

