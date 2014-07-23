<?php

use \MVC\Controller;

class Error extends Controller {
	
	function handle($label){
		switch($label){
			case 'not_found' :
				http_response_code(404);
				echo '<p>Page not found.</p>';
				break;
			default:
				http_response_code(500);
				echo '<p>An error occured.</p>';
				break;
		}
	}
	
}
