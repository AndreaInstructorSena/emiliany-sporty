<?php

session_start();
require_once '../models/authModel.php';

class AuthController {
    private $authModel;

    public function __construct() {
        $this->authModel = new AuthModel();
    }

    // Log in the user
    public function login($email, $password) {
        $user = $this->authModel->getUserByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
            return true;
        }
        return false;
    }

    // Check if the user is logged in
    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    // Get the current user's role
    public function getUserRole() {
        return $_SESSION['user_role'] ?? null;
    }

    // Log out the user
    public function logout() {
        session_destroy();
    }

    // Check if the user has a specific role
    public function hasRole($role) {
        return $this->getUserRole() === $role;
    }

    // Middleware for access control
    public function authorize($role) {
        if (!$this->isLoggedIn() || !$this->hasRole($role)) {
            header('Location: registro.php');
            exit();
        }
    }

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
        if ($this->authModel->getUserByEmail($email)) {
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
            $this->authModel->registerUser($name, $email, $password);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];

            return [];  // No errors, registration successful
        } catch (Exception $e) {
            return ['Registration failed: ' . $e->getMessage()];
        }
    }
}
