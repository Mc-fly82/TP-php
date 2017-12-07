<?php
session_start();
$name = strip_tags(trim($_SESSION['name']??$_POST['name']??""));
$password = strip_tags(trim($_SESSION['password']??$_POST['password']??""));
$submit = strip_tags(trim($_POST['submit']??""));
$users = include 'utilisateurs.php';

if (array_key_exists($name,$users )) {

  if ($users["$name"] === $password ){
      $_SESSION['name'] = $name;
      $_SESSION['password'] = $password;
      header("Location: /inc11/index.php");
      exit;
  }
}

if ($submit == 'submit') {
  $erro = 'Whooops!';
}

require 'header.php';
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 m-t">
      <div class="panel panel-success">
        <div class="panel-heading"><h1>Connexion</h1></div>
        <div class="panel-body">
          <form class="" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" name="name" class="form-control" id="name" value="<?php echo htmlentities($name) ?>" placeholder="">
              <p class="help-block <?php if (isset($erro)) echo  "has-error" ?>"> <?php echo isset($erro)? $erro : 'Entre votre nom.'  ?> </p>
            </div>

            <div class="form-group">
              <label for="password">Mot de passe</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="">
              <p class="help-block <?php if (isset($erro)) echo  "has-error" ?>"> <?php echo isset($erro)? $erro : 'Entre votre mot de passe.'  ?> </p>
            </div>

            <div class="form-group">
              <button type="submit" name="submit" value="submit" class="form-control" id="submit">Envoyer</button>
            </div>

            <div class="form-group">
              <button type="" class="form-control"  id="reinit">R&eacute;initialiser</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
