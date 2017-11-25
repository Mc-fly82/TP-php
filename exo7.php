<?php include 'inc04/jours.inc.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<?php preg_match('/([0-9]+)/', $_SERVER['PHP_SELF'],$match); ?>
	<title>TP n <?php echo $match[0] ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/inc.css">
</head>

<body>
	<h1>TP n <?php echo $match[0] ?></h1>

<?php
$courant = date('d/m/Y');
$courant_day = date('D');
$courant3Obj = date_add(date_create(), date_interval_create_from_date_string('3 days'));
$courant3 = date_format($courant3Obj, 'd/m/Y');
$courantDay3 = date_format($courant3Obj, 'D');
$courantTime3 = date_format($courant3Obj, 'H:i:s');
echo "Nous sommes le $courant, c'est un $day_trad[$courant_day] et il est ".date("H:i:s")." <br>";
echo "Dans 3 jours nous serons le $courant3, ce sera un $day_trad[$courantDay3] et il sera ".$courantTime3." <br>";
?>
</body>
</html>


 
