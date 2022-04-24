<?php
include"koneksi.php";
?>


<h3> SIGN UP </h3>

<body background="images.jpg">
</body>
<form action="" method="post">
<table align="center">
    <tr>
        <td> Nama Lengkap </td>
        <td> <input type="text" name="Nama Lengkap"> </td>
    </tr>
    <tr>
        <td> Username </td>
        <td> <input type="text" name="username"> </td>
    </tr>
	<tr>
        <td> Berat Badan </td>
        <td> <input type="text" name="Berat Badan"> </td>
    </tr>
    <tr>
		<td> Tinggi Badan </td>
        <td> <input type="text" name="Tinggi Badan"> </td>
    </tr>
    <tr>
        <td> Email </td>
        <td> <input type="text" name="Email"> </td>
    </tr>
    <tr>
        <td> Password </td>
        <td> <input type="password" name="password"> </td>
    </tr>
    <tr>
        <td> Confirm Password </td>
        <td> <input type="password" name="confirm password"> </td>
    </tr>
    <tr>
        <td><input type="submit" name="register" value="Register"> </td>
    </tr>
</table>

</form>

<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
if(isset($_POST['register'])){
mysqli_query($koneksi, "insert into users set  
username = '$_POST[username]',
password = '$_POST[password]',
confirm = '$_POST[confirm]'");

echo "Data baru telah tersimpan";
echo <meta http-equiv=refresh content=2;URL='login.php'>;}

?>
   
</body>
</html>
