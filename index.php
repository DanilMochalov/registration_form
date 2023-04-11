<!DOCTYPE html>
<html>
<head>
	<title>Регистрация пользователя</title>
</head>
<body>
	<h1>Регистрация пользователя</h1>
	<form method="post" action="register.php">
		<label for="username">Имя пользователя:</label>
		<input type="text" id="username" name="username" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Пароль:</label>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Зарегистрироваться">
	</form>
</body>
</html>
