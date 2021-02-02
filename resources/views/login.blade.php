<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<h1>Login Page</h1>

	<br><br>

	<form action="formSubmit" method="post">

		{{ @csrf_field() }}

		<label>Email: </label>
		<input type="text" name="email">
		@error('email')
			{{ $message }}
		@enderror

		<br><br>

		<label>Password: </label>
		<input type="password" name="password">
		@error('password')
			{{ $message }}
		@enderror

		<br><br>

		<button type="submit" name="submit">Login</button>

		<br><br>

		{{ session('error') }}
	</form>

</body>
</html>
