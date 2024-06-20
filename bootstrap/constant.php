<?php

define("BASE_DIRECTORY", dirname(__DIR__));
define("BASE_URL", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://' .  $_SERVER['SERVER_NAME']  . ":" . $_SERVER['SERVER_PORT']);