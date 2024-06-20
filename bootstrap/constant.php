<?php

define("BASE_DIRECTORY", __DIR__);
define("BASE_URL", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://' .  $_SERVER['SERVER_NAME']  . ":" . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI']);