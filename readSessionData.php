<?php
// Set a session variable
$_SESSION['hide_menu'] = true;
// From here on, we can access hide_menu in $_SESSION
if ($_SESSION['hide_menu']) {
    // Hide menu
}
