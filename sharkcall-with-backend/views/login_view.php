<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Admin</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/admin-vendor/style-admin.css" rel="stylesheet">
  </head>

  <body>


      <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <!-- Icon -->
          <div class="fadeIn first">
            <img src="assets/admin-vendor/icon.svg" id="icon" alt="User Icon" />
          </div>

          <!-- Login Form -->
          <form method="post" action="login">
            <input type="email" id="login" class="fadeIn second" name="login" placeholder="votre@adresse-email.com" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="votre-mot-de-passe" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>">
            <input type="submit" name="connexion" class="fadeIn fourth" value="Login">
          </form>

          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
            <?php if (isset($erreur)) echo '<br /><br /><p>'.$erreur.'</p>'; ?>
          </div>

        </div>
      </div>
      
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
