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





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    
    <h1>Generatore Password Casuale</h1>
    <form method="GET">
        <label for="password_length">Lunghezza della Password:</label>
        <input type="number" id="password_length" name="password_length" min="1" max="100">
        <button type="submit">Genera Password</button>
    </form>

</body>
</html>