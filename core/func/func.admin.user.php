<?php 
	
	function yo_admin_user_verify($username, $password) {
		$_DATABASE = getDatabaseConnecton();

		if ($_DATABASE) {
			if ($result = $_DATABASE->query("SELECT * FROM `cms_users` WHERE `user_username` = '".$username."'")) {
				if ($result->num_rows == 0) {
					return "user not found";
				} else {
					$row = $result->fetch_assoc();
					if ($row['user_password'] == $password) {
						return "ok";
					} else {
						return "incorrect password";
					}
				}
			}
		}
	}

?>