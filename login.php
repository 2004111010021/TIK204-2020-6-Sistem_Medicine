<?php
	include "koneksi.php";
	
?>
<html>
<head>
       <title>WEB MEDICINE</title>
</head>
<body background="images.jpg">

<h1>LOGIN</h1>
		<a href="sign up.php" target="_SELF">
		<button class="btn fifth">register</button></a>

<table align="center" border="1">
    <tr>
	<td>
       <form action="login-proses.php" method="post">
 
		<div> Username :</div>
 
		<input name="username" type="text" placeholder="Masukkan username" />
    
    <div> Password :</div>
 
		<input name="password" type="password" placeholder="Masukkan Password " />
	
	</td>
	</tr>
	<tr>
		<td>
		<input type="submit" name="login" value="Login" />
		</td>
    </tr>
