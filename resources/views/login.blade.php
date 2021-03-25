<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>User Login</h1>
	<form action="user" method="post">
		@csrf
		<input type="text" name="user" placeholder="enter your name">
		<br><br>
		<input type="password" name="password" placeholder="enter your password">
		<br><br>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>