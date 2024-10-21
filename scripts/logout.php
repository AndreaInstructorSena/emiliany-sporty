<?php

require_once 'authController.php';
$auth = new AuthController();
$auth->logout();
header('Location: login.php');
exit();
