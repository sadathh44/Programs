<?php

	session_start();
	
	
	
		$file='C:\\xampp\\htdocs\\notes\\notes\\pdf\\'.$_GET['notes'];
		header('Content-Type: '.mime_content_type($file));
		
		readfile($file);


	
	

?>