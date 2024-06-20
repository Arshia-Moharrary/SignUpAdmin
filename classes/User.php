<?php

abstract class User {
    // Property
    protected $fullName;
    protected $email;
    protected $password;
    protected $role;

    // Methods
    protected function validation($fullName, $email, $password, $role, $format) {
        // This validation is simple
        if (empty($fullName) || empty($email) || empty($password) || empty($role)) {
            return false;
        }

        // Check user email is exist or not
        if (file_exists("{$email}.{$format}")) {
            return false;
        }

        return true;
    }

    public abstract function add($fullName, $email, $password, $role);
}