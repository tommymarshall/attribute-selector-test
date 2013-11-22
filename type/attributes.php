<?php include '../config.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Attribute Selector Test</title>
	<style>
		[class^="button"] {
			border-radius: 3px;
			border: none;
			color: white;
			font-size: 16px;
			padding: 10px;
		}
		[class^="button"][class*="--blue"] {
			background: blue;
		}
		[class^="button"][class*="--red"] {
			background: red;
		}
		[class^="button"][class*="--large"] {
			font-size: 36px;
		}
		[class^="button"][class*="--rounded"] {
			border-radius: 10px;
		}
		[class^="section"] {
			width: 100%;
		}
		[class^="section"] > .contain {
			margin: 0 auto;
			max-width: 100%;
			width: 600px;
		}
		[class^="section"][class*="--white"] {
			color: #333;
		}
		[class^="section"][class*="--blue"] {
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