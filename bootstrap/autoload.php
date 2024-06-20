<?php

spl_autoload_register(function ($className) {
    $classFolder = "classes";
    $classPath = __DIR__ . $classFolder . "/" . $className . ".php";
    include $classPath;
});