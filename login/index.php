<?php

    // Donat que HTTP és un protocol sense estat, per poder vincular les diferents peticions d'un mateix client entr si, cal associar-les mitjançant el que es coneix com a sessions.
    // session_start();

    require_once(dirname(__FILE__) . '/constants.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        require_once(dirname(__FILE__) . '/controlErrors.php');

    }

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pac-1 / DAM2 - M7 - UF1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">

    <!-- Styles CSS -->
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1>Login · Harcoded</h1>
        <?php
            if (!empty($errors)) {
                echo '<script>alert("Usuari no autenticat!");</script>';
            }
        ?>
        <form id="login" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="hidden" name="emailBtoa">
            <input type="hidden" name="passwordBtoa">
            <div class="row">
                <label for="email">El teu correu electrònic</label>
                <input type="email" id="email" name="email" placeholder="El teu correu electrònic" autocomplete="current-email" value = "<?php if(!empty($_COOKIE['email'])) echo $_COOKIE['email']; ?>" required autofocus>
                <?php if (!empty($errors) && array_key_exists('email', $errors)) echo "<p class='errors'>{$errors['email']}</p>"; ?>
            </div>
            <div class="row">
                <label for="password">La teva contrasenya</label>
                <input type="password" id="password" name="password" <?php echo "minlength='" . LOGIN['password']['minlength'] . "' maxlength='" . LOGIN['password']['maxlength'] . "'"; ?> placeholder="La teva contrasenya" autocomplete="current-password" required>
                <?php if (!empty($errors) && array_key_exists('password', $errors)) echo "<p class='errors'>{$errors['password']}</p>"; ?>
            </div>
            <div class="row">
                <input type="submit" value="Enviar">
                <?php

                    if (!empty($errors)) {

                        if (array_key_exists('nologin', $errors)) {
                            echo "<p class='errors'>{$errors['nologin']}</p>";
                        }elseif (array_key_exists('login', $errors)) {
                            echo "<p class='errors'>{$errors['login']}</p>";
                        }
                    }

                ?>
            </div>
            <p><a href="#" title="Has oblidat la contrasenya?">Has oblidat la contrasenya?</a></p>
        </form>

        <script>

            window.addEventListener("DOMContentLoaded", function () {

                var form = document.getElementById('login');
                var emailBtoa = document.querySelector('input[name="emailBtoa"]');
                var passwordBtoa = document.querySelector('input[name="passwordBtoa"]');
                var email = document.getElementById('email');
                var password = document.getElementById('password');

                form.addEventListener('submit', function(){

                    emailBtoa.value = btoa(email.value);
                    passwordBtoa.value = btoa(password.value);
                });
            });

        </script>

        <script src="" async defer></script>
    </body>
    </html>