<?php
function saveUserData($username, $password, $nama, $nim, $email) {
    $userData = "$username|$password|$nama|$nim|$email" . PHP_EOL;
    file_put_contents('userData.txt', $userData, FILE_APPEND);
}

function loginUser($username, $password) {
    $users = file('userData.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        $userInfo = explode('|', $user);
        if ($userInfo[0] === $username && $userInfo[1] === $password) {
            return array(
                'nama' => $userInfo[2],
                'nim' => $userInfo[3],
                'email' => $userInfo[4]
            );
        }
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $newNama = $_POST['nama'];
    $newNIM = $_POST['nim'];
    $newEmail = $_POST['email'];

    saveUserData($newUsername, $newPassword, $newNama, $newNIM, $newEmail);
    echo "Registrasi berhasil! Silakan login.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loggedInUser = loginUser($username, $password);
    if ($loggedInUser !== false) {
        setcookie('username', $username, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
        header("Location: index.html");
        exit;
    } else {
        echo "Login gagal. Periksa kembali username dan password Anda.";
        echo "<br><a href='login.html'>Kembali</a> | <a href='register.html'>Registrasi</a>";
    }
}
?>
