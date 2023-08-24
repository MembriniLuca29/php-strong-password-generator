<?php
 include __DIR__.'/partials/functions.php';
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