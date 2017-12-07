<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>TP n 4 Suite page 2</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/inc.css">
</head>

<body>
	<h1>TP n 4 Suite page 2</h1>
	<?php require 'jours.inc.php'; ?>
	<div class="container">
		
		<div class="row">
			<div class="col-lg-2">
				<table>
					<tr>
						<th style="text-align: left">N&ordm;</th>
						<th style="text-align: left">Fran&ccedil;ais</th>
						<th style="text-align: left">English</th>
					</tr>
					<tr>
						<?php for ($i=0; $i < $nb_jours = count($jours) ; $i++):  ?>
							<td style="text-align: left"><?= $i ?></td>
							<td style="text-align: left"><?= $jours[$i] ?></td>
							<td style="text-align: left"><?= $days[$i] ?></td>
						</tr>
						<tr>
						<?php endfor; ?>
					</tr>
				</table>
			</div>
		</div>
		
		<p style="margin-top: 20px"><a href="page2.php">Version avec indice</a></p>
		<p><a href="page3.php">Version avec traduction</a></p>
		
	</div>
</body>
</html>
