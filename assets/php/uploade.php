<?php
require'connexion.php';
if (isset($_POST['btn'])) {
    $fileName = $_FILES['cv']['name'];
    $fileTmpName = $_FILES['cv']['tmp_name'];
    $path = "assets/files/".$fileName;
    $query ="INSERT INTO students(file_url) VALUES ('$path')";
    $run = mysqli_query($connexion , $query);
    if ($run ) {
        move_uploaded_file($fileTmpName ,$path);
        echo "success";
    }
    else{
        echo"error".mysqli_error($connexion);
    }
}

header("location:index.php");
exit (0);

?>