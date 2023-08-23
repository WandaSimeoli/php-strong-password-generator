<?php 
$number = $_GET['password-length'];

function generatePassword($number) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=<>?';
    $password = '';

    for ($i = 0; $i < $number; $i++ ) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    return $password;
}
$newPassword = generatePassword($number);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h1>
        Password Generator
    </h1>
<form method="get">
        <label for="password">
            Inserisci la lunghezza della password
        </label> 
        <div>
        <input type="number" name="password-length" id="password">
        </div>
        <button type="submit">Invia</button>
    </form>
    <?php 
    echo $newPassword;
    ?>
</body>
</html>