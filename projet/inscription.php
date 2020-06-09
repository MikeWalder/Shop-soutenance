<?php
    session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <title>Inscription</title>
</head>

<?php
    require 'bdd.php';
    require 'recaptcha/autoload.php';

    $erreur = null;

    if(isset($_POST['submit'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) 
        && !empty($_POST['pseudo']) && !empty($_POST['email']) 
        && !empty($_POST['mdp']) && !empty($_POST['cmdp']))
        {
            if(isset($_POST['g-recaptcha-response']))
                {    
                    // Script d'envoi d'une requête à Google pour la validation du Captcha
                    $recaptcha = new \ReCaptcha\ReCaptcha('6Lfi-AAVAAAAAIYFJbo1F2nMhxKKZcjANrd06XBf');
                    $resp = $recaptcha//->setExpectedHostname('recaptcha-demo.appspot.com')
                                    ->verify($_POST['g-recaptcha-response']);
                    if ($resp->isSuccess()) {
                        var_dump('Captcha valide !');
                    
                        $nom = htmlspecialchars($_POST['nom']);
                        $prenom = htmlspecialchars($_POST['prenom']);
                        $pseudo = htmlspecialchars($_POST['pseudo']);
                        $email = htmlspecialchars($_POST['email']);
                        $mdp = htmlspecialchars($_POST['mdp']);
                        $cmdp = htmlspecialchars($_POST['cmdp']);

                        //Si le pseudonyme est trop court
                        if(strlen($pseudo) < 3)
                        {
                            $erreur[] = "Le pseudonyme doit comporter au moins 3 caractères";
                        }
                        //Si l'adresse e-mail n'est pas valide, je rajoute une erreur au tableau d'erreurs
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                        {
                            $erreur[] = "Merci de renseigner un e-mail valide.";
                        }
                        //Si le mot de passe n'est pas égal à la confirmation, pareil.
                        if($mdp !== $cmdp)
                        {
                            $erreur[] = "Les deux mots de passe sont différents.";
                        }
                    

                        if(!$erreur)
                        {        
                            $sql = 'INSERT INTO user(nom, prenom, pseudo, email, mdp) VALUES(:nom, :prenom, :pseudo, :email, :mdp)';
                            $requete = $pdo->prepare($sql);
                            $resultat = $requete->execute(array(
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'mdp' => password_hash($mdp, PASSWORD_BCRYPT)
                            ));
                            $_SESSION['pseudo'] = $pseudo;
                            //header('location: index.php');
                        }
                        else 
                        {
                            $erreur[] = 'une erreur est survenue lors de l\'insertion en base de données';
                        }
                    } else {
                        var_dump('Captcha invalide !');
                    }
                }
            }   
            else {
                    $erreur[] = 'merci de remplir tous les champs';
            }
    }
    
        if($erreur){
            foreach($erreur as $err){
                echo $err.'<br />';
            }
        }
    
?>


<body>
    <h1>Inscription</h1>

    <form method="post" action="">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" required>
        </div>
        <div class="form-group">
            <label for="pseudo">Choisissez un pseudonyme</label>
            <input type="text" name="pseudo" class="form-control" id="pseudo" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Addresse email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Confirmez le mot de passe</label>
            <input type="password" name="cmdp" class="form-control" id="exampleInputPassword2" required>
        </div>
        <div class="form-group">
            <div name="capt" class="g-recaptcha" 
                data-sitekey="6Lfi-AAVAAAAADOhKDBCjaMckwdCmqbjP-jnUs20">
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">S'inscrire</button>
    </form>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>