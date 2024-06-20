<?php

include "bootstrap/autoload.php";

// Import template
include "templates/tpl-index.php";

if (isset($_POST["sign"]) && isset($_POST["method"])) {
    $className = "User{$_POST['method']}";
    $user = new $className();
    $result = $user->add($_POST["fullName"], $_POST["email"], $_POST["password"], $_POST["method"]);
    if ($result) {
        echo "<p>{$_POST['email']}." . strtolower($_POST["method"]) . " file created was successfully</p>";
    } else {
        echo "File creation failed";
    }
} else {
    echo "Select method";
}