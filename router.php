<?php

session_start();

// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
else if (preg_match('/(?:phpinfo)\.php$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} 
else if (preg_match('/destroy$/', $_SERVER["REQUEST_URI"])) {
    session_destroy();
    echo 'session destroyed';
} 
else {
    include('public/index.php');
}

require_once( 'footer.php');
