<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman master</title>
	<style>
		.menu li {
			display: inline-block;
		}

		.menu li a {
			display: block;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1>Blog &raquo; @yield('title')</h1>
	<ul class="menu">
		<li><a href="{{ url('post') }}">Post</a></li>
		<li><a href="{{ url('user') }}">User</a></li>
	</ul>

	@yield('content')
</body>
</html>