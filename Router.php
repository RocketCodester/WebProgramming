<?php
if (PHP_SAPI == 'cli-server') {
// If the file exists on disk
    if (realpath(__DIR__ . "/" . $_SERVER['REQUEST_URI'])) {
// serve as-is
        return false;
    } else {
// route the request to our app (could be Zend
// Framework, etc)
        MyRouter::route($_SERVER['REQUEST_URI']);
        return true;
    }
// Dummy router example, shows the requested resource,
// and dumps $_SERVER
    class MyRouter {
        static public function route($path) {
            echo "Requested Resource: $path";
            var_dump($_SERVER);
        }
    }
}
else {
    echo "PHP_SAPI does not equal cli-server";
}