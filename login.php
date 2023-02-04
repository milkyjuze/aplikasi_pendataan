<html>
<head>
	<title>EVENT</title>
</head>
<style>
body 
fieldset {
    border: 1px solid #DDDDDD;
    display: inline-block;
    font-size: 14px;
    padding: 1em 2em;
}
 
legend {
    background: #BFD48C;
    color: #FFFFFF;
    margin-bottom: 10px;
    padding: 0.5em 1em;
}
 
 
/* DESAIN INPUT FIELD */
 
label {
    color: #666666;
    display: block;
    font-size: 12px;
}
 
input[type="text"] {
    border: none;
    border-bottom: 1px solid #DDDDDD;
    font-size: 14px;
    margin-bottom: 15px;
    padding: 0.5em 1em 0.5em 0;
    width: 250px;
}
 
input[type="text"]:focus {
    border-bottom: 1px solid #BFD48C;     /* Border Green saat focus */
    outline: none;
}
</style>
<body>
	<p><h2 style="color: darkseagreen;" align="center">Selamat Datang Di Halaman Login |SMK Luqman Al-Hakim Kudus</h2></p>
	<br>
	<form action="aksi_login.php" method="POST">
	<fieldset>
		<legend>LOGIN</legend>
		<table align="center">
			<tr>
				<h4><td align="center"><strong> Username </strong></td></h4>
				<td align="center">:</td>
				<td><input type="text" name="username" placeholder="here..."></td>
			</tr>
			<tr>
				<h4><td align="center"><strong>Password</strong></td></h4>
				<td align="center">:</td>
				<td><input type="password" name="password" placeholder="here..."></td>
			</tr>
			<tr>
				<td align="left"><input type="submit" value="kirim"></td>
			</tr>
		</table>
		<br>
		<table>
		<p align="center">Belum Punya Akun? Silahkan Buat Akun Mu!<a href="pendaftaran.php">Create an Account</a></p>
	</table>
</fieldset>
</form>
<hr>
<br>
<p>Copyright &copy; SMK lqman Al-Hakim Kudus</p>
</body>
</html>

