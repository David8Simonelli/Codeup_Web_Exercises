<?php
	$favorite = ['Snow Cones', 'Squirrels', 'Not Sleeping', 'Trail Mix', 'Dogs'];
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	#other {
		text-decoration: none;
	}
	.text {
		font-size: 70px;
		text-decoration: underline;
		color: white;
		text-align: center;
		list-style-type: none;
	}
	body {
		background-image: url(http://www.zingerbugimages.com/backgrounds/sky_blue_flame_fractal_background_seamless.jpg);
	}
	</style>
</head>
<body>
	<h1 class="text">My Favorite Things</h1>
	<ol>
		<?php foreach ($favorite as $key => $value):
			if($key % 2 == 1): ?>
			<li id='other' class ='text'><?= $value; ?></li>
			<?php else: ?>
			<li class='text'><?= $value; ?></li>
			<?php endif;
		endforeach ?>
	</ol>
</body>
</html>