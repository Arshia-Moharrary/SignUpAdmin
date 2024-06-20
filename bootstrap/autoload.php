<?php

// Include non-oo file
include "constant.php";

spl_autoload_register(function ($className) {
    $classFolder = "classes";
    $classPath = BASE_DIRECTORY . $classFolder . "/" . $className . ".php";
    include $classPath;
});