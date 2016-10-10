<?php 
	
	function yo_get_blog_info($var) {
		if (file_exists('config.xml')) {
			$xml = simplexml_load_file('config.xml');

			$item = (array) $xml;

			return $item[$var];
		}
	}
?>