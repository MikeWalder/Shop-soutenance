<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Google font styles -->    
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

    <!-- Links to use Font Awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Soutenance projet</title>
</head>

    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <a class="nav-link pr-5" href="index.php">
                    <h1 class="p-md-3 pl-md-4 font-weight-bold main_title text-center-xs">Shopp'Web</h1>
                </a>
            </div>
        </div>
    </div>



    <nav class="navbar navbar-expand-sm navbar-dark bg-custom">
        <ul class="navbar-nav mr-auto text-center pl-5 d-none d-md-block">
            <!-- <li class="nav-item">
                <a class="nav-link pr-5" href="accueil.php">
                    <img src="images/icon_site.png" width="60" height="60" title="Venir à l'accueil" 
                    alt="Site du chat de base" class="img_effect ml-auto ml-5">
                    <div class="font-weight-bold text_style">Shopping Web ! </div>
                </a>
            </li> -->
            <li class="nav-item text-center">
                <div class="pt-1 style_two d-none d-lg-block">
                    Le meilleur site d'annonces, pour de vrai
                </div>
                
            </li>
        </ul>

        

        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text">
        <i class="fas fa-bars fa-1x"></i></span></button>

    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent1">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <!-- <a class="nav-link pt-2 font-weight-bold text-white pl-md-4 pr-md-4 nav_element" 
                href=""><i class="fas fa-list pr-md-2"></i>Catégories</a> -->
                <div class="dropdown">
                    <div class="dropdown-toggle pt-1 font-weight-bold text-white pl-md-5 pr-md-3 nav_element categ_nav d-none d-sm-block" 
                    data-toggle="dropdown"><i class="fas fa-list pr-sm-1 pr-2"></i>Catégories</a>
                    </div>
                    <div class="dropdown-menu categ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <a class="dropdown-item font-weight-bold" href="#">MULTIMEDIA</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" name="informatique" href="#">Informatique</a>
                                    <a class="dropdown-item" name="console" href="#">Consoles & Jeux vidéos</a>
                                    <a class="dropdown-item" name="image_son" href="#">Images & Son</a>
                                    <a class="dropdown-item mb-3" name="telephonie" href="#">Téléphonie</a>

                                    <a class="dropdown-item font-weight-bold" href="#">VEHICULES</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" name="camions" href="#">Camions</a>
                                    <a class="dropdown-item" name="voitures" href="#">Voitures</a>
                                    <a class="dropdown-item" name="utilitaires" href="#">Utilitaires</a>
                                    <a class="dropdown-item" name="nautisme" href="#">Nautisme</a>
                                    <a class="dropdown-item" name="camions" href="#">Camions</a>
                                    <a class="dropdown-item" name="motos" href="#">Motos</a>
                                    <a class="dropdown-item mb-3" name="velos" href="#">Vélos</a>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <a class="dropdown-item font-weight-bold" href="#">LOISIRS</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" name="DVD" href="#">DVD - Films</a>
                                    <a class="dropdown-item" name="CD" href="#">CD - Musique</a>
                                    <a class="dropdown-item" name="livres" href="#">Livres</a>
                                    <a class="dropdown-item" name="sports" href="#">Sports</a>
                                    <a class="dropdown-item" name="instru_musique" href="#">Instruments de musique</a>
                                    <a class="dropdown-item" name="collection" href="#">Collection</a>
                                    <a class="dropdown-item" name="jeux_jouets" href="#">Jeux & Jouets</a>
                                    <a class="dropdown-item" name="dastronomie" href="#">Gastronomie</a>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <a class="dropdown-item font-weight-bold" href="#">MAISON</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" name="ameublement" href="#">Ameublement</a>
                                    <a class="dropdown-item" name="electromenager" href="#">Electroménager</a>
                                    <a class="dropdown-item" name="bricolage" href="#">Bricolage</a>
                                    <a class="dropdown-item mb-3" name="jardinage" href="#">Jardinage</a>
                                    <a class="dropdown-item font-weight-bold" href="#">AUTRES</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" name="divers" href="#">Divers</a>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <a class="dropdown-item font-weight-bold" href="#">MODE</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" name="vetements" href="#">Vêtements</a>
                                    <a class="dropdown-item" name="chaussures" href="#">Chaussures</a>
                                    <a class="dropdown-item" name="accessoires" href="#">Accessoires</a>
                                    <a class="dropdown-item" name="montre_bijoux" href="#">Montres & Bijoux</a>
                                    <a class="dropdown-item mb-3" name="vetement_bebe" href="#">Vêtements bébé</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>



        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 pr-md-3 d-none d-xl-bock" type="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-success my-2 my-sm-0 pr-md-3" type="submit">Search</button> -->
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link pt-2 font-weight-bold text-white pl-md-3 pr-md-3 nav_element" 
                href="favorites.php"><i class="far fa-heart pr-xs-1 pr-2 pr-md-2"></i>Favoris</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pt-2 font-weight-bold text-white pl-md-3 pr-md-3 nav_element" 
                href="messages.php"><i class="fas fa-list pr-xs-1 pr-2 pr-md-2"></i>Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pt-2 font-weight-bold text-white pl-md-3 pr-md-3 nav_element" 
                href="connexion.php"><i class="far fa-user pr-xs-1 pr-2 pr-md-2"></i>Connexion</a>
            </li>
        </ul>   
    </div> 

    </nav>
