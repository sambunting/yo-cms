<?php

	function yo_get_posts() {
		$_DATABASE = getDatabaseConnecton();

		if ($_DATABASE) {

			if ($result = $_DATABASE->query("SELECT * FROM `cms_posts`")) {
				while ($row = $result->fetch_assoc()) {
					echo '<div class="yo-post">';

					echo '<h3 class="yo-post-content">'.$row['post_title'].'</h3>';
					echo '<p class="yo-post-info">Posted By '.$row['post_author'].' on '.$row['post_time'].'</p>';
					echo '<div class="yo-post-content">'.$row['post_content'].'</div>';

					echo '<div>';
				}
			}

			
		}
	}

?>