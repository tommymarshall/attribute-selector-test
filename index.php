<?php if (!isset($_GET['test'])): ?>
	<a href="?test=attr">Test with Attribute Selectors</a> |
	<a href="?test=normal">Test without (Normal)</a>
<?php else: ?>
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Attribute Selector Test</title>
		<?php if ($_GET['test'] === 'attr'): ?>
		<style>
			.button,
			[class^="button"][class*="--blue"],
			[class^="button"][class*="--red"],
			[class^="button"][class*="--large"],
			[class^="button"][class*="--rounded"] {
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

			.section, [class^="section"][class*="--white"], [class^="section"][class*="--blue"] {
				width: 100%;
			}
			.section > .contain, [class^="section"][class*="--white"] > .contain, [class^="section"][class*="--blue"] > .contain {
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
		<?php elseif ($_GET['test'] === 'normal'): ?>
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
		<?php endif; ?>
	</head>
	<body>
		<?php
			$loops = 100;
		?>
		<?php while ($i++ < $loops): ?>
			<button class="button--blue--large">Here is a button</button>
			<button class="button--red--rounded">Here is a button</button>
		<?php endwhile; ?>

		<?php while ($j++ < $loops): ?>
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
<?php endif; ?>