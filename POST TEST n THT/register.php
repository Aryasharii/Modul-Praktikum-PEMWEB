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

    $userExists = false;
    $users = file('userData.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        $userInfo = explode('|', $user);
        if ($userInfo[0] === $newUsername) {
            $userExists = true;
            break;
        }
    }

    if ($userExists) {
        header("Location: register.html?error=1");
        exit;
    } else {
        saveUserData($newUsername, $newPassword, $newNama, $newNIM, $newEmail);
        header("Location: login.html");
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loggedInUser = loginUser($username, $password);
    if ($loggedInUser !== false) {
        echo "Login berhasil! Selamat datang, " . $loggedInUser['nama'] . "!";
    } else {
        echo "Login gagal. Periksa kembali username dan password Anda.";
    }
}
?>
