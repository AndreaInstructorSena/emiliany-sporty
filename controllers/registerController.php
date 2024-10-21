<?php
session_start();
require_once '../models/userModel.php';

class RegisterController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    // Validate registration input
    private function validateInput($name, $email, $password) {
        $errors = [];

        // Basic validation
        if (empty($name)) {
            $errors[] = "Name is required.";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
        if (strlen($password) < 6) {
            $errors[] = "Password must be at least 6 characters long.";
        }

        // Check if email is already registered
        if ($this->userModel->getUserByEmail($email)) {
            $errors[] = "Email is already registered.";
        }

        return $errors;
    }

    // Register the user
    public function register($name, $email, $password) {
        // Validate user input
        $errors = $this->validateInput($name, $email, $password);
        
        if (!empty($errors)) {
            return $errors;
        }

        // Register the user and return success or failure
        try {
            $this->userModel->registerUser($name, $email, $password);
            return [];  // No errors, registration successful
        } catch (Exception $e) {
            return ['Registration failed: ' . $e->getMessage()];
        }
    }
}
