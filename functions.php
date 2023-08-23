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