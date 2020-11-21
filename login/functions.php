<?php

    function password_hash_pac1($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }