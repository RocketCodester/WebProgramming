<?php
setcookie("test_cookie[0]", "foo");
setcookie("test_cookie[1]", "bar");
setcookie("test_cookie[2]", "bar");

if(isset($_COOKIE['test_cookie'])){
    var_dump($_COOKIE['test_cookie']);
}
else{
    echo "No cookie!? Reload the page.";
}

