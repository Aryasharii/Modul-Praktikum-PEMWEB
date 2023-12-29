<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validUsername = "arya@gmail.com";
    $validPassword = "password123"; 
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login
    if ($username === $validUsername && $password === $validPassword) {

        header("Location: index");
        exit;
    } else {
        
        header("Location: login.html?error=1");
        exit;
    }
} else {
    header("Location: login");
    exit;
}
?>
