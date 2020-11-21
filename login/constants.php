<?php

    define('LOGIN', array(
        'nologin' => array(
            'msg' => "L'email i/o el password no coincideixen amb cap usuari registrat.",
        ),
        'login' => array(
            'msg' => "Els paràmetres d'entrada són incorrectes. Si us plau, introduiu correctament: email i password.",
        ),
        'email' => array(
            'msg' => "El camp email és incorrecte!",
        ),
        'password' => array(
            'minlength' => 6,
            'maxlength' => 16,
            'msg' => "El camp password no té la longitud correcte!",
        ),
    ));

    define('USERS', array(
        array(
            'email' => 'admin@educem.com',
            'password' => password_hash_pac1('iloveu')
        ),
        array(
            'email' => 'donald@educem.com',
            'password' => password_hash_pac1('m4k3Am3r1caGr3atAg41n!')
        ),
        array(
            'email' => 'gilete@educem.com',
            'password' => password_hash_pac1('ErF4ryS1empr3')
        ),
        array(
            'email' => 'gon@educem.com',
            'password' => password_hash_pac1('Fatality!')
        ),
    ));
