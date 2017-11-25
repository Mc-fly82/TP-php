<?php
$polygones = [

	'3' => 'triangle',
	'4' => 'quadrilatère',
	'5' => 'pentagone',
	'6' => 'hexagone',
	'8' => 'octogone',
	'12' => 'dodécagone',

];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>TP n 3</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/inc.css">
</head>

<body>
	<h1>TP n 3</h1>
	<div class="container">
		
		<div class="row">
			<div class="col-lg-3">
				<table>
					<tr>
						<th>Cl&eacute</th>
						<th>Valeur</th>
					</tr>
					<tr>
						<?php foreach ($polygones as $key => $value) :?>
							<td><?= $key ?></td>
							<td><?= $value ?></td>
						</tr>
						<tr>
						<?php endforeach; ?>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-3">
				<table>
					<tr>
						<th>Polygone</th>
					</tr>
					<tr>
						<?php foreach ($polygones as $value) :?>
							<td><?= $value ?></td>
						</tr>
						<tr>
						<?php endforeach; ?>
					</tr>
					
				</table>
			</div>
		</div>
		
		<p>Il y a <?= $p_sum = count($polygones) ?> polygone<?= $p_sum <= 2 ? '' : 's'  ?></p>
		<p>Un polygone a 8 cotés est un <?= $polygones[8] ?> </p>
	</div>
</body>
</html>
