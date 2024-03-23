<?php
session_start();
$_SESSION['ex']="Yakin mau keluar?";
header("Location: home.php");
?>
