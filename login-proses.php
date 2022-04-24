<?php
 
include "koneksi.php";
 
session_start();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
 
    $query = "SELECT * FROM users WHERE username= '$username' AND password = '$password'";
    $queryDB = mysqli_query($koneksi, $query);
    $check = mysqli_num_rows($queryDB);
 
    if ($check === 1) {
        // ambil data users
        $getData = mysqli_fetch_array($queryDB);
        // set session 
        $_SESSION['username'] = $getData;
        $_SESSION['is_login']  = true;
 
        header("location:index.php");
    } else {
        echo "Username atau password yang anda masukkan salah";
		echo "<meta http-equiv=refresh content=2;URL='login.php'>";
    }
} else {
    return "Anda tidak di ijinkan";
}