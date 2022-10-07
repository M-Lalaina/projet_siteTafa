<?php
    require("connexion.php");

    if (isset($_POST['btn'])) {
        $nom              = $_POST['nom'];
        $prenom           = $_POST['prenom'];
        $mail             = $_POST['mail'];
        $contact          = $_POST['contact'];
        $CvfileName       = $_FILES['cv']['name'];
        $CvfileTmpName    = $_FILES['cv']['tmp_name'];
        $Cvpath           = "assets/file_upload/".$CvfileName; 
        $LmfileName       = $_FILES['lm']['name'];
        $LmfileTmpName    = $_FILES['lm']['tmp_name'];
        $Lmpath           = "assets/file_upload/".$LmfileName; 

        $req = mysqli_query($connexion, "INSERT INTO `candidates`(name, firstname, email, contact, resume_url, cover_letter_url) VALUES ('$nom', '$prenom', '$mail', '$contact', '$Cvpath', '$Lmpath')");
        if ($req = true) {
            echo "Inscription réussi";
        }
        if ($req) {
            move_uploaded_file($CvfileTmpName, $Cvpath);
            move_uploaded_file($LmfileTmpName, $Lmpath);
        }
        else{
            echo "error".mysqli_error($connexion);
        }
        header("location:index.php");
        exit(0);
    }

    
?>