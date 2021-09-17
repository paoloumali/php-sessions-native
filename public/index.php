<?php
//ini_set('session.save_path', '/home/paoloumali/Desktop/php-sessions-native/sessions');

session_start();

echo '<pre>';
echo 'mode:'.getenv('MYENV')."\n";
echo 'it starts here';
