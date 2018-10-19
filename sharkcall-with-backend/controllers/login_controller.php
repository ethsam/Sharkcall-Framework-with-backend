<?php
// on teste si le visiteur a soumis le formulaire de connexion
  if (isset($_POST['connexion']) && $_POST['connexion'] == 'Login') {

    if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

      $loginArray = [ 'login' => $_POST['login'], 'password' => $_POST['password'] ];

        $sessionAdmin = $databaseConnection->getCompareLogin($loginArray);

          if ($sessionAdmin[4] == 1) {
                session_start();
                    $_SESSION['login'] = $sessionAdmin;
                      header('Location: admin');
                          exit();

            } elseif ($sessionAdmin == false) {

              $erreur = '<div class="alert alert-danger" role="alert">Error : identifiants de connexion incorrects !!!</div>';

             } else {

              $erreur = '<div class="alert alert-danger" role="alert">Error : Database error</div>';

            }

        } else {

           $erreur = '<div class="alert alert-danger" role="alert">Error : Merci de renseigner tous les champs !!!</div>';

        }

      }
?>
