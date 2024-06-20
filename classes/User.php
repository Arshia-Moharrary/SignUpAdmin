<?php

abstract class User {
    // Property
    protected $fullName;
    protected $email;
    protected $password;
    protected $method;

    // Methods
    protected function validation($fullName, $email, $password, $method, $format) {
        // This validation is simple
        if (empty($fullName) || empty($email) || empty($password) || empty($method)) {
            return false;
        }

        // Check user email is exist or not
        if (file_exists("{$email}.{$format}")) {
            return false;
        }

        return true;
    }

    public abstract function add($fullName, $email, $password, $method);
}