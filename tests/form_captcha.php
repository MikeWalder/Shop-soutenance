<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <!-- Le script du head -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <title>Test du captcha</title>
    </head>
    <body>

    <?php
    //Inclure le fichier d'autoload
        require 'recaptcha/autoload.php';
    
        if(isset($_POST['validation']))
        {    
            if(isset($_POST['g-recaptcha-response']))
            {    
                // Script d'envoi d'une requête à Google pour la validation du Captcha
                $recaptcha = new \ReCaptcha\ReCaptcha('6Lfi-AAVAAAAAIYFJbo1F2nMhxKKZcjANrd06XBf');
                $resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
                                ->verify($_POST['g-recaptcha-response']);
                if ($resp->isSuccess()) {
                    var_dump('Captcha valide !');
                    echo $_POST['prenom'];
                } else {
                    var_dump('Captcha valide !');
                }
            }
        }
    ?>


        <form method="POST" action="">
            <!-- Notre boite de vérification -->
            <div class="g-recaptcha" 
            data-sitekey="6Lfi-AAVAAAAADOhKDBCjaMckwdCmqbjP-jnUs20">
            </div>
            <input type="text" name="prenom">
            <input type="submit" name="validation" id="valider" value="valider" />
        </form>
    </body>
</html>
