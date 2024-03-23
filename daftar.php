<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/style1.css">
    <meta name="robots" content="noindex, follow">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js" nonce="05234ea8-21b2-4c83-b1a0-e42c57b0edb6"></script><script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyUmVnaXN0cmF0aW9uRm9ybV92MSUyMGJ5JTIwQ29sb3JsaWIlMjIlMkMlMjJ4JTIyJTNBMC4zOTkxNjc5Mzc3NDU2NTk0JTJDJTIydyUyMiUzQTEyODAlMkMlMjJoJTIyJTNBNzIwJTJDJTIyaiUyMiUzQTU5OCUyQyUyMmUlMjIlM0ExMjgwJTJDJTIybCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGY29sb3JsaWIuY29tJTJGZXRjJTJGcmVnZm9ybSUyRmNvbG9ybGliLXJlZ2Zvcm0tMTclMkYlMjIlMkMlMjJyJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZjb2xvcmxpYi5jb20lMkZ3cCUyRmZyZWUtYm9vdHN0cmFwLXJlZ2lzdHJhdGlvbi1mb3JtcyUyRiUyMiUyQyUyMmslMjIlM0EyNCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EtNDIwJTJDJTIycSUyMiUzQSU1QiU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMCUyMiUyQyUyMmNvbmZpZyUyMiUyQyU3QiUyMnNjb3BlJTIyJTNBJTIycGFnZSUyMiU3RCU1RCU3RCUyQyU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMSUyMiUyQyUyMlVBLTIzNTgxNTY4LTEzJTIyJTJDJTdCJTIyc2NvcGUlMjIlM0ElMjJwYWdlJTIyJTdEJTVEJTdEJTVEJTdE"></script><script nonce="05234ea8-21b2-4c83-b1a0-e42c57b0edb6">try{(function(w,d){!function(ct,cu,cv,cw){ct[cv]=ct[cv]||{};ct[cv].executed=[];ct.zaraz={deferred:[],listeners:[]};ct.zaraz.q=[];ct.zaraz._f=function(cx){return async function(){var cy=Array.prototype.slice.call(arguments);ct.zaraz.q.push({m:cx,a:cy})}};for(const cz of["track","set","debug"])ct.zaraz[cz]=ct.zaraz._f(cz);ct.zaraz.init=()=>{var cA=cu.getElementsByTagName(cw)[0],cB=cu.createElement(cw),cC=cu.getElementsByTagName("title")[0];cC&&(ct[cv].t=cu.getElementsByTagName("title")[0].text);ct[cv].x=Math.random();ct[cv].w=ct.screen.width;ct[cv].h=ct.screen.height;ct[cv].j=ct.innerHeight;ct[cv].e=ct.innerWidth;ct[cv].l=ct.location.href;ct[cv].r=cu.referrer;ct[cv].k=ct.screen.colorDepth;ct[cv].n=cu.characterSet;ct[cv].o=(new Date).getTimezoneOffset();if(ct.dataLayer)for(const cG of Object.entries(Object.entries(dataLayer).reduce(((cH,cI)=>({...cH[1],...cI[1]})),{})))zaraz.set(cG[0],cG[1],{scope:"page"});ct[cv].q=[];for(;ct.zaraz.q.length;){const cJ=ct.zaraz.q.shift();ct[cv].q.push(cJ)}cB.defer=!0;for(const cK of[localStorage,sessionStorage])Object.keys(cK||{}).filter((cM=>cM.startsWith("_zaraz_"))).forEach((cL=>{try{ct[cv]["z_"+cL.slice(7)]=JSON.parse(cK.getItem(cL))}catch{ct[cv]["z_"+cL.slice(7)]=cK.getItem(cL)}}));cB.referrerPolicy="origin";cB.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(ct[cv])));cA.parentNode.insertBefore(cB,cA)};["complete","interactive"].includes(cu.readyState)?zaraz.init():ct.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon"  href="assets/img/logosky.png">

</head>

    <body>
    <div class="wrapper" style="background-image: url('assets/img/body.png');">
    <div class="inner">
    <div class="image-holder">
    <img src="assets/img/container.png" alt="">
    
    </div>
    <div class="hdr">
    
    </div>
    <?php
                if(isset($_POST['submit'])) {
                    $username=$_POST['username'];
                    $password=md5($_POST['pass']);
                    $email=$_POST['email'];
                    $nama_lengkap=$_POST['namleng'];
                    $alamat=$_POST['alamat'];
                    $cek=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE Username='$username' OR Email='$email'"));
                     if($cek ==0){
                        mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password','$email','$nama_lengkap','$alamat')");
                        echo 'Daftar Berhasil, Silahkan Login!!';
                        echo '<meta http-equiv="refresh" content="0.8; url=login.php">';
                     }else{
                        echo 'Maaf Akun Sudah Ada';
                        echo '<meta http-equiv="refresh" content="0.8; url=daftar.php">';
                     }
                  }
                  ?>
    <form action="" method="POST">
    <h3>Registration Form</h3>
    <div class="form-wrapper">
    <input type="text" placeholder="Nama Lengkap" class="form-control" name="namleng" required>
    <i class='far fa-address-card'></i>
    </div>


    <div class="form-wrapper">
    <input type="text" placeholder="Username" class="form-control " name="username" required>
    <i class='fas fa-user-alt'></i>
    </div>

    <div class="form-wrapper">
    <input type="email" placeholder="Email" class="form-control" name="email" required>
    <i class="fa fa-envelope"></i>
    </div>

    <div class="form-wrapper">
    <input class="form-control" type="password" name="pass" id="password" placeholder="Password" pattern=".{8,}" title="Password harus minimal 8 karakter" required />
    <i class="fa fa-key icon"></i>

    </div>

    <div class="form-wrapper">
    <input type="text" placeholder="Alamat" class="form-control" name="alamat" required>
    <i class='fas fa-map-marker-alt'></i>
    
    </div>
    <button>
    <input type="submit" value="Daftar" name="submit">
    <i class="fa fa-long-arrow-right"></i>
    </button>
    <p>Sudah Punya Akun? <a href="login.php" class="ps">Login Sekarang</a></p>
    
   

    </form>
    </div>
    </div>
    <?php
 if(@$_SESSION['s']){ ?>
    <script>
        swal("Yeay!", "<?php echo $_SESSION['s']; ?>", "success").then((value)=>{if(value){
            window.location.replace('login.php');
        }});</script>
    <?php unset($_SESSION['s']); ?>
<?php }else if(@$_SESSION['s1']){ ?>
    <script>swal("Gagal cok!", "<?php echo $_SESSION['s1']; ?>", "error");</script>
    <?php unset($_SESSION['s1']); ?>
<?php }else if(@$_SESSION['s2']){ ?>
    <script>swal("Gagal cok!", "<?php echo $_SESSION['s2']; ?>", "error");</script>
    <?php unset($_SESSION['s2']);} 
    ?>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-23581568-13');
    </script>
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon="{&quot;rayId&quot;:&quot;85ce83b7d88f68e4&quot;,&quot;version&quot;:&quot;2024.2.1&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;}" crossorigin="anonymous"></script>
    
    </body></html>