<?php
$title = 'Upload Fotos';

$login_cookie = $_COOKIE['email'];
if(isset($login_cookie)){
    include 'adm/head.php';
    include 'adm/header.php';
    include 'adm/upfotos.php';
    include 'adm/footer.php';
}else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Pagina restrita,Faça login para prosseguir');window.location
    .href='adm_login.php';</script>";
  }
?>