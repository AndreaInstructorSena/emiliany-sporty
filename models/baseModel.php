<?php

require_once 'database.php';

class BaseModel {
    protected $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance();
    }

    // Common method to execute a query with optional parameters
    protected function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    // Method to fetch one record
    public function fetchOne($sql, $params = []) {
        return $this->query($sql, $params)->fetch();
    }

    // Method to fetch all records
    public function fetchAll($sql, $params = []) {
        return $this->query($sql, $params)->fetchAll();
    }

    // Insert a record and return the last inserted ID
    public function insert($sql, $params = []) {
        $this->query($sql, $params);
        return $this->pdo->lastInsertId();
    }

    // Update a record
    public function update($sql, $params = []) {
        return $this->query($sql, $params)->rowCount();
    }

    // Delete a record
    public function delete($sql, $params = []) {
        return $this->query($sql, $params)->rowCount();
    }
}
