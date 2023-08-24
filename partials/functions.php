<?php

    function generateRandomPassword($length) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($characters) - 1);
            $password .= $characters[$randomIndex];
        }

        return $password;
    }

    if (isset($_GET['password_length'])) {
        $password_length = intval($_GET['password_length']);
        $generated_password = generateRandomPassword($password_length);

        echo "<h2>Password Generata:</h2>";
        echo "<p>$generated_password</p>";
    }
    ?>