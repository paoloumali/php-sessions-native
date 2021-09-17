<?php
// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
else if (preg_match('/(?:phpinfo|gif)\.php$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} 
else {
    include('public/index.php');
}
