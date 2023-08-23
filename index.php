<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">
        Password Generator
    </h1>
    <div class="container-md">
    <form method="get" class="text-center">
        <label for="password" class="mb-3">
            Inserisci la lunghezza della password
        </label> 
        <div>
        <input type="number" name="password-length" id="password" class="mb-3 border border-danger">
        </div>
        <button type="submit" class="btn btn-danger">Invia</button>
    </form>
    <h2 class="text-center">
    <?php 
    echo 'La password generata è :' . $newPassword;
    ?>
    </h2>
    </div>
</body>
</html>