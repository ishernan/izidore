<?php
 $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
 $whitelist = array(
     '127.0.0.1',
     '::1',
     'localhost'
 );
 $path_main = !in_array($_SERVER['REMOTE_ADDR'], $whitelist) ? $protocol . $_SERVER['HTTP_HOST'] . '/' : $protocol . $_SERVER['HTTP_HOST'] . '/izidore/';
 