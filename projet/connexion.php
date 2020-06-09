<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://localhost/projet/connexion.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <!--<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
-->

    <title>Connexion</title>
  </head>
  <body style="background: linear-gradient(15deg, #13547a 0%, #60ccbf 100%);" class="mt-5">

<?php
  require 'bdd.php';

$erreur = null;
$succes = null;

if(isset($_POST['submit']))
{
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST['mdp']);

        
        $sql = 'SELECT mdp FROM user WHERE pseudo = :pseudo';
        $requete = $pdo->prepare($sql);
        $requete->execute(array(
            'pseudo' => $pseudo
        ));
        $donnees = $requete->fetch();
        $mdp_bdd = $donnees['mdp'];


        if(password_verify($mdp, $mdp_bdd)) 
        {
            $_SESSION['pseudo'] = $pseudo;
            $succes = "Vous êtes connecté en tant que ".$_SESSION['pseudo'];
            
            //header('location: index.php');
        }
        else 
        {
            $erreur = "Identifiants incorrects.";
        }
    }
    else 
    {
        $erreur = "Merci de remplir tous les champs.";
    }
}
if($erreur)
            {
                echo $erreur;
            }
            if($succes)
            {
                echo $succes.'<br />';
            }
            else 
            {
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto">
            <h1>Connexion</h1>
            <?php 
            
            ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" name="pseudo" id="pseudo" />
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password"  class="form-control"  name="mdp" id="mdp" />
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Connexion</button>
                </div>
            </form> 
            <?php } ?>
        </div>
    </div>
</div>

<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-share-button" 
    data-href="http://localhost/projet/connexion.php" 
    data-layout="button" 
    data-size="large">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>