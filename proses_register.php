<?php


    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $level = "custemer";
    $status = "on";
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    unset($_POST['password']);
    unset($_POST['re_password']);
    $datafrom = http_build_query($_POST);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");

    if(empty($nama_lengkap) || empty($email) || empty($phone) || empty($alamat) || empty($password)){
    	header("location: ".BASE_URL."index.php?page=register&notif=require&$datafrom");
    }elseif ($password != $re_password) {
    	header("location: ".BASE_URL."index.php?page=register&notif=password&$datafrom");
    }elseif (mysqli_num_rows($query) == 1){
    	header("location: ".BASE_URL."index.php?page=register&notif=email&$datafrom");
    }

    else{
    	$password = md5($password);

    mysqli_query($koneksi, "INSERT INTO user (level, nama, email, alamat, phone, password, status)
    	                                VALUES ('$level','$nama_lengkap', '$email', '$alamat', '$phone', '$password', '$status')");

    header("location: ".BASE_URL."index.php?page=login");
         }


