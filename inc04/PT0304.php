<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>TP n 4</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/inc.css">
</head>

<body>
	<h1>TP n 4</h1>
	<?php require 'jours.inc.php'; ?>
	<div class="container">
		
		<div class="row">
			<div class="col-lg-1">
				<table>
					<tr>
						<th style="text-align: left">Jours</th>
					</tr>
					<?php foreach ($jours as $value) :?>
						<tr>
							<td style="text-align: left"><?= $value ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
		
	</div>
</body>
</html>
