<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>

	<ul>
		<li><a href="home">Home</a></li>
		<li><a href="about">About Us</a></li>
		<li><a href="services">Services</a></li>
	</ul>

	<h1>@yield('page')</h1>
	<br><br>

	{{ session()->get('email') }}
	<br><br>

	<form action="logout" method="post">
		{{ @csrf_field() }}
		<button type="Submit">Logout</button>
	</form>

	<br><br>

	<div>
		@yield('content')
	</div>

</body>
</html>