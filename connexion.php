<?php
    // Connexion base de donnée
    $connexion = mysqli_connect('localhost', 'root', '', 'tafa3.0');

    if($connexion) {
        echo "connexion réussi";
    }else {
        die('connexion echoué :'. mysqli_connect_error());
    }
?>
  