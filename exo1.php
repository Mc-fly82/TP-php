<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
 <head>
 <title>TP n <?php preg_match('/([0-9]+)/', $_SERVER['PHP_SELF'],$match);echo $match[0] ?></title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>

 <body>
 <h1>TP n <?php preg_match('/([0-9]+)/', $_SERVER['PHP_SELF'],$match);echo $match[0] ?></h1>
 
<?php
	echo $chaine = "l'élève à dépassé le maître"; echo '<br>';
	echo  "chaine= $chaine"."</br>";
	echo "nb car =".mb_strlen($chaine)."</br>";
	echo "pos. le =".mb_strpos($chaine, 'le')."</br>";
	echo "pos. é = ".mb_strpos($chaine, 'é')."</br>";
	echo "nb. é = ".substr_count($chaine, 'é')."</br>";
?>
</body>
</html>
