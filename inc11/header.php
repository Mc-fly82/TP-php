<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<?php preg_match('/([0-9]+)/', $_SERVER['PHP_SELF'],$match); ?>
	<?php echo $_POST['page']; ?>
	<title>TP n <?php echo $match[0] ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/inc.css">
	<style media="screen">
		.m-t{
			margin-top: 10em
		}
		.has-error{
			color: rgb(171, 0, 0);
		}
	</style>
</head>
<body>
