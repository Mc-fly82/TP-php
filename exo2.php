<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
 <head>
 <?php preg_match('/([0-9]+)/', $_SERVER['PHP_SELF'],$match); ?>
 <title>TP n <?php echo $match[0] ?></title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>

 <body>
 <h1>TP n <?php echo $match[0] ?></h1>
 
<?php
function hyper($url="#")
{
	return "<p><a href=\"http://$url\" title=\"Lien vers $url \">$url</a></p>";
}
echo  hyper('www.google.fr');
echo  hyper('www.bing.fr');
echo hyper();
?>
</body>
</html>

<a href="" ></a>