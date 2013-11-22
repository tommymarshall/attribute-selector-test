<?php include '../config.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Attribute Selector Test</title>
	<style>
		.button--blue--large {
			background: blue;
			border-radius: 3px;
			border: none;
			color: white;
			font-size: 36px;
			padding: 10px;
		}
		.button--red--rounded {
			background: red;
			border-radius: 10px;
			border: none;
			color: white;
			font-size: 16px;
			padding: 10px;
		}
		.section--blue,
		.section--white {
			width: 100%;
		}
		.section--blue > .contain,
		.section--white > .contain {
			margin: 0 auto;
			max-width: 100%;
			width: 600px;
		}
		.section--white {
			color: #333;
		}
		.section--blue {
			background: blue;
			color: white;
		}
	</style>
</head>
<body>
	<?php while ($i++ < $loops): ?>
		<button class="button--blue--large">Here is a button</button>
		<button class="button--red--rounded">Here is a button</button>
		<div class="section--blue">
			<div class="contain">
				<h1>This Section is Blue</h1>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
			</div>
		</div>
		<div class="section--white">
			<div class="contain">
				<h1>This Section is White</h1>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
			</div>
		</div>
	<?php endwhile; ?>
</body>
</html>
