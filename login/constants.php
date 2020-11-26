<?php

    function password_hash_pac1($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    define('LOGIN', array(
        'nologin' => array(
            'msg' => "L'email i/o la contrasenya no coincideixen amb cap usuari registrat.",
        ),
        'login' => array(
            'msg' => "Els paràmetres d'entrada són incorrectes. Si us plau, introduiu correctament: email i contrasenya.",
        ),
        'email' => array(
            'msg' => "El camp email és incorrecte!",
        ),
        'password' => array(
            'minlength' => 6,
            'maxlength' => 16,
            'msg' => "El camp contrasenya no té la longitud correcte!",
        ),
    ));

    define('USERS', array(
        // user 1
        array(
            'email' => 'admin@educem.com',
            'password' => password_hash_pac1('iloveu')
        ),
        // user 2
        array(
            'email' => 'donald@educem.com',
            'password' => password_hash_pac1('m4k3Am3r1caGr3atAg41n!')
        ),
        // user 3
        array(
            'email' => 'gilete@educem.com',
            'password' => password_hash_pac1('ErF4ryS1empr3')
        ),
        // user 4
        array(
            'email' => 'gon@educem.com',
            'password' => password_hash_pac1('Fatality!')
        ),
    ));
