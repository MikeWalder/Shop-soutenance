<?php 
session_start();
unset($_SESSION['pseudonyme']);

echo 'Vous avez bien été deconnecté';
//header('refresh:2;url=index.php');

