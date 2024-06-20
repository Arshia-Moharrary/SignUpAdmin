<?php

class UserCsv extends User {
    private $format = "csv";
    private $folderName = "Csv";

    public function add($fullName, $email, $password, $role) {
        $valid = $this->validation($fullName, $email, $password, $role, $this->format);

        if ($valid) {
            $folderName = "Users/{$this->folderName}";
            $fullFileName = $folderName . "/" . "{$email}.{$this->format}";
            $data = [
                "fullName" => $fullName,
                "email" => $email,
                "password" => $password,
                "role" => $role
            ];

            file_put_contents($fullFileName, implode(",", $data));
        }
    }
}