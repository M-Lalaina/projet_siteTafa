<?php
    require("connexion.php");
        if (isset($_POST['btn'])) {
        $nom              = $_POST['nom'];
        $prenom           = $_POST['prenom'];
        $mail             = $_POST['mail'];
        $contact          = $_POST['contact'];
        $CvfileName       = $_FILES['cv']['name'];
        $CvfileTmpName    = $_FILES['cv']['tmp_name'];
        $Cvpath           = "../file_upload/".$CvfileName; 
        $LmfileName       = $_FILES['lm']['name'];
        $LmfileTmpName    = $_FILES['lm']['tmp_name'];
        $Lmpath           = "../file_upload/".$LmfileName; 

        if(isset($nom) && empty($nom)) {
            
            $error = 'Veuillez remplir votre nom';
        
        }elseif(isset($prenom) && empty($prenom)) {
            
            $error = 'Veuillez remplir votre prénom';

        }elseif(empty($mail)  || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            
            $error = 'email invalide';
        
        }elseif(preg_match('/[a-zA-Z]+/', $contact)){

            $error = 'numéro de téléphone invalide';
        
        }elseif(empty($CvfileName)){
            
            $error = 'veuillez inclure votre cv';

        }elseif(empty($LmfileTmpName)){
            
            $error = 'veuillez inclure votre lettre de motivation';

        }else{
            
            $req = mysqli_query($connexion, "INSERT INTO `candidates`(name, firstname, email, contact, resume_url, cover_letter_url) 
            VALUES ('$nom', '$prenom', '$mail', '$contact', '$Cvpath', '$Lmpath')");
            
            if ($req) {
                move_uploaded_file($CvfileTmpName, $Cvpath);
                move_uploaded_file($LmfileTmpName, $Lmpath);
                $message =  "Inscription réussi";
            }
            else{
                $error = mysqli_error($connexion);
            }
        }
        
    }
?>