<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo yo_get_blog_info("BLOG_NAME"); ?></title>

		<link rel="stylesheet" type="text/css" href="content/themes/<?php echo yo_get_blog_info('THEME_NAME'); ?>/style/normalize.css">
		<link rel="stylesheet" type="text/css" href="content/themes/<?php echo yo_get_blog_info('THEME_NAME'); ?>/style/stylesheet.css">
	</head>
	<body>
		
		<div id="main">
			<h1><?php echo yo_get_blog_info("BLOG_NAME"); ?></h1>

			<div id="post-listing">
				<?php yo_get_posts() ?>
			</div>
		</div>

		
	</body>
</html>