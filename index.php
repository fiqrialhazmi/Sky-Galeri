<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK 2024 | Website Galeri Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon"  href="assets/img/logosky.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
        <a class="navbar-brand" href="?url=index">Sky Galeri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="?url=home">Home</a>
            <?php if(isset($_SESSION['user_id'])): ?>
            <a class="nav-link" href="?url=upload">Upload</a>
            <a class="nav-link" href="?url=album">Album</a>
            <a class="nav-link" href="?url=profile"><?= ucwords($_SESSION['username']) ?></a>
            <a href="?url=logout" class="nav-link">Logout</a>   
            <?php else: ?>
            <a class="nav-link" href="login.php">Login</a>
            <a class="nav-link" href="daftar.php">Daftar</a>
            <?php endif; ?>
        </div>
        </div>
    </div>
    </nav>
    <?php if(@$_SESSION['ex']){ ?>
    <script>
        swal({title: "Apakah anda yakin untuk keluar?",text: "<?php echo $_SESSION['ex']; ?>",icon: "warning",buttons: ["tidak","yakin"],dangerMode: true,}).then((value)=>{if(value){
            window.location.replace('index.php');
        }});</script>
    <?php unset($_SESSION['ex']);} 
    ?>
    <?php 
        $url=@$_GET["url"];
        if($url=='home'){
            include 'page/home.php';
        }elseif($url=='profile'){
            include 'page/profil.php';
        }else if($url=='upload'){
            include 'page/upload.php';
        }else if($url=='album'){
            include 'page/album.php';
        }else if($url=='like'){
            include 'page/like.php';
        }else if($url=='komentar'){
            include 'page/komentar.php';
        }else if($url=='detail'){
            include 'page/detail.php';
        }else if($url=='kategori'){
            include 'page/kategori.php';
        }else if($url=='logout'){
            session_destroy();
            header("Location: ?url=home");
        }else{
            include 'page/home.php';
        }
    ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <footer>
  
        <div class="footer">
            <big>Copyright &copy; 2024 - Sky galeri.</big>
        </div>
    </footer>

</body>
</html>