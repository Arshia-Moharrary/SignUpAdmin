<?php

class UserJson extends User {
    private $format = "json";
    private $folderName = "Json";

    public function add($fullName, $email, $password, $method) {
        $valid = $this->validation($fullName, $email, $password, $method, $this->format);

        if ($valid) {
            $folderName = "Users/{$this->folderName}";
            $fullFileName = $folderName . "/" . "{$email}.{$this->format}";
            $data = [
                "fullName" => $fullName,
                "email" => $email,
                "password" => $password,
                "method" => $method
            ];

            if (file_put_contents(BASE_DIRECTORY . "/classes/" . $fullFileName, json_encode($data))) {
                return true;
            } else {
                return false;
            }
        }
    }
}