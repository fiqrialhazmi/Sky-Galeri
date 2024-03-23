<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $Username = $_POST['nam'];
    $Password = md5($_POST['pass']);
$sql = mysqli_query($conn, "SELECT * FROM user WHERE Username='$Username'");
$v = mysqli_fetch_array($sql);

if (mysqli_num_rows($sql) <= 0) {
    $_SESSION['e'] = "Data kamu tidak terdaftar!";
} else {
    if ($Password == $v['Password']) {
        $_SESSION['user_id'] = $v;
        $_SESSION['username']=$v['Username'];
        $_SESSION['username']=$v['Username'];
        $_SESSION['user_id']=$v['UserID'];
        $_SESSION['email']=$v['Email'];
        $_SESSION['nama_lengkap']=$v['NamaLengkap'];
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['e1'] = "Password kamu ada yang salah pastikan bahwa password kamu benar!";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon"  href="assets/img/logosky.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>

        <form action="" method="post">
            <div class="input-box">
                <input class="input-field" type="text" name="nam" placeholder="Username kamu" required/>
            </div>
            <div class="input-box">
            <input class="input-field" type="password" name="pass" id="password" placeholder="Password" pattern=".{8,}" title="Password harus minimal 8 karakter" required />
            <div class="forgot">
                <section>
                    <input type="checkbox" id="check">
                    <label for="check">Remember Me</label>
                </section>
                <section>
                    <a href="#">Forgot password ?</a>
                </section>
            </div>
            <div class="input-submit">
                <button class="submit-btn" id="submit" name="submit"></button>
                <label for="submit">Login</label>
            </div>
            <div class="sign-up-link">
                <p>belum punya akun? <a href="daftar.php" class="link-primary">Daftar sekarang</a></p>
            </div>
        </form>

        <?php
        if (@$_SESSION['e']) {
            echo '<script>swal("Gagal!", "' . $_SESSION['e'] . '", "error");</script>';
            unset($_SESSION['e']);
        } else if (@$_SESSION['e1']) {
            echo '<script>swal("Gagal!", "' . $_SESSION['e1'] . '", "error");</script>';
            unset($_SESSION['e1']);
        }
        ?>
    </div>
</body>
</html>
