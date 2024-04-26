<?php
session_start();

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if( $key === $row['nim'] ) {
        $_SESSION['login'] = true;
    }
}

if( isset($_SESSION["login"]) ) {
    header("Location: ../index.php");
    exit;
}

require './controller/UserController.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$username'");
;
    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if( isset($_POST['remember']) ) {
                // buat cookie

                setcookie('id', $row['id'], time()+60);
                setcookie('key', $row['nim'], time()+60);
            }

            header("Location: ../index.php");
            exit;
        }
    }

    $error = true;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../resources/css/styles.css">
</head>
<body>

<?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">Username / password salah</p>
<?php endif; ?>

<div class="login-page">
    <div class="login-space">
        <div class="login-box-header">
            <h2>NilaiKu</h2>
        </div>
        <div class="login-box-body">
            <form class="form-login" action="" method="post">
                <input type="text" name="username" id="username" placeholder="NIM">
                <input type="password" name="password" id="password" placeholder="Password">
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>