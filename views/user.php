<?php

require_once '../controllers/authController.php';
$auth = new AuthController();
$auth->authorize('user');  // Only admins can access this page

echo "Welcome to the Admin Dashboard!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
</head>
<body>
    <h1>User Dashboard</h1>
    <p>Welcome!!!</p>
    <a href="../scripts/logout.php">Logout</a>
</body>
</html>
