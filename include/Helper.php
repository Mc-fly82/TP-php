<?php
// namespace App;

class Helper {

	const PAGE_NAME = 1;

	static function is_page($option = 0){
		$current = array_shift(array_reverse(explode('/', $_SERVER['REQUEST_URI'])));

		if ($current === 'page3.php') {
		 return $option === self::PAGE_NAME ? 'page3' : 2 ;
		}

		if ($current === 'page2.php') {
		 return $option === self::PAGE_NAME ? 'page2' : 1 ;
		}

		return $option === self::PAGE_NAME ? 'index' : 0 ;

	}

	public function reset(){
		setcookie('visites',0,time() - 3600 ,'/');
		header('Location: /inc'.$_POST['exo'].'/index.php');
	}

}
const PAGE_NAME = 1;
