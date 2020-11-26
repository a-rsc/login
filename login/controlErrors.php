<?php

    $errors = array();

    if (!(
        sizeof($_POST) === 4 &&
        isset($_POST['emailBtoa']) &&
        isset($_POST['passwordBtoa']) &&
        isset($_POST['email']) &&
        isset($_POST['password'])
    )) {
        // El formulari ha estat modificat per l'usuari
        $errors['login'] = LOGIN['login']['msg'];
        return 1; // ERROR
    } else {

        $email = filter_input(INPUT_POST, 'emailBtoa');
        $password = filter_input(INPUT_POST, 'passwordBtoa');

        $email = base64_decode($email);
        $password = base64_decode($password);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $errors['email'] = LOGIN['email']['msg'];
        }

        if (!(
            strlen($password) >= LOGIN['password']['minlength'] &&
            strlen($password) <= LOGIN['password']['maxlength']
        )) {

            $errors['password'] = LOGIN['password']['msg'];
        }

        if (empty($errors)) {

            foreach (USERS as $value) {

                if ($value['email'] === $email && password_verify($password, $value['password'])) {

                    session_start();
                    $_SESSION['email'] = $email;
                    setcookie("email", $email, time()+3600*24*7);

                    header("location: http://www.educem.com");
                    // header("location: ./home.php");
                    exit;
                }
            }

            $errors['nologin'] = LOGIN['nologin']['msg'];

        }else {

            return 1; // ERROR
        }
    }

    return 0;
