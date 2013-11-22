<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Attribute Selector Test</title>
	<style>
		html {
			padding: 0;
			margin: 0;
		}
		body {
			background: #eee;
			font-family: Helvetica;
			height: 100%;
			margin: 0;
			padding: 0;
			text-align: center;
			width: 100%;
		}
		.container {
			background: #fff;
			margin: 10% auto;
			padding: 50px;
			width: 600px;
		}

		a {
			background: #444;
			color: #fff;
			display: block;
			font-size: 18px;
			margin: 4px 0;
			padding: 0.5em 1em;
			text-decoration: none;
			text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
		}

		a:hover {
			background: #777;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Target elements with:</h1>
		<a href="type/attributes.php">Attributes selectors</a>
		<a href="type/single.php">Single class names</a>
		<a href="type/multiple.php">Multple class names</a>
	</div>
</body>
</html>