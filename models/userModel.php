<?php

require_once 'baseModel.php';

class UserModel extends BaseModel {
    // Fetch user by email
    public function getUserByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = :email";
        return $this->fetchOne($sql, ['email' => $email]);
    }

    // Register a new user (with hashed password)
    public function registerUser($name, $email, $password, $role = 'user') {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)";
        return $this->insert($sql, [
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'role' => $role
        ]);
    }
}
