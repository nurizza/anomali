<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>

<center>
	<form action="<?php echo base_url('auth/login')?>" method="post">
		<label>Username : </label>
		<input type="text" name="username" required>
		<br>
		<label>Password : </label>
		<input type="password" name="password" required>
		<br>
		<button type="submit">LOGIN</button>
	</form>
</center>

</body>
</html>