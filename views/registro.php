<?php
require_once '../controllers/authController.php';

$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($auth->login($email, $password)) {
            // Redirect to dashboard after successful login
            header('Location: user.php');
            exit();
        } else {
            $error = "Invalid login credentials!";
        }
    }
    
    if (isset($_POST['register'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fullName = $_POST['fullName'];

        // Call the register method
        $errors = $auth->register($fullName, $email, $password);

        // Redirect to login on successful registration
        if (empty($errors)) {
            header('Location: user.php');
            exit();
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../public/registro.css">
    <script src="../public/registro.js" defer></script>
</head>
<body>
        
    <div class="container">
        <div class="container-form">
            <form class="sign-in" method="POST">
                <h2>Iniciar Sesión</h2>
                <span>Use su correo y contraseña</span>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Email" name="email">
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <input type="hidden" name="login" value="1">
                <button class="button" type="submit">INICIAR SESIÓN</button>
            </form>

            <?php if (!empty($error)): ?>
                <p style="color:red;"><?php echo $error; ?></p>
            <?php endif; ?>


        </div>

        <div class="container-form">
            <form class="sign-up" method="POST">
                <h2>Registrarse</h2>
                <span>Use su correo electrónico para registrarse</span>
                <div class="container-input">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" placeholder="Nombre" name="fullName">
                </div>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Email" name="email">
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <input type="hidden" name="register" value="1">
                <button class="button">REGISTRARSE</button>
            </form>

            <?php if (!empty($errors)): ?>
                <ul style="color:red;">
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

        <div class="container-welcome">
            <div class="welcome-sign-up welcome">
                <h3>¡Bienvenido!</h3>
                <p>Ingrese sus datos personales para iniciar sesion </p>
                <button class="button" id="btn-sign-up">Registrarse</button>
            </div>
            <div class="welcome-sign-in welcome">
                <h3>¡Hola!</h3>
                <p>Regístrese todos sus datos personales para ingresar a su cuenta</p>
                <button class="button" id="btn-sign-in">Iniciar Sesión</button>
            </div>
        </div>

    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>