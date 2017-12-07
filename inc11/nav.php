<!-- navigation -->
<h3>Bonjour <?php echo $name ?></h3>
<ul>
	<li><a href="index.php">Page d'accueil</a></li>
	<li><a href="page2.php">Page 2</a></li>
	<li><a href="page3.php">Page 3</a></li>
	<form name="myform" action="/include/raz_exo11.php" method="post">
		<input hidden name="page" value="<?php  echo $page  ?>">
		<li><a href="javascript: submitform()">raz compteur</a></li>
	</form>
	<form name="myform1" action="/inc11/deconnexion.php" method="post">
		<input hidden name="page" value="<?php  echo $page  ?>">
		<li><a href="javascript: submitform1()">d&eacute;connection</a></li>
	</form>
</ul>

<div class="container">
	<p><?php echo  $count[0] ?> visite(s) de la page d'accueil</p>
	<p><?php echo  $count[1] ?> visite(s) de la page 2</p>
	<p><?php echo  $count[2] ?> visite(s) de la page 3</p>
	<p>Le numéro de session: <?php echo  $_COOKIE["PHPSESSID"] ?></p>
	<?php

	 ?>
	<p>Le nom de la session: PHPSESSID</p>
</div>
