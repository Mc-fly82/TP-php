<?php 
function set_cookier_counter($name,$value,$expiration,$path = '/') {
	
	// if ( $count == -1) {
	// 	return $count = 0;
		
	// } else {
		setcookie($name,$value,$expiration,$path); 
		return $value;
	// }
}
