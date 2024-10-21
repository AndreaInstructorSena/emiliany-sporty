<?php
require_once 'baseModel.php';

class AuthModel extends BaseModel {
    // Fetch user by email
    public function getUserByEmail($email) {
        $sql = "SELECT * FROM account WHERE email = :email";
        return $this->fetchOne($sql, ['email' => $email]);
    }

    // Register a new user (with hashed password)
    public function registerUser($name, $email, $password, $role = 'user') {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO account (fullName, email, password, role)
                VALUES (:fullName, :email, :password, :role)";

        return $this->insert($sql, [
            'fullName' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'role' => $role
        ]);
    }
}
