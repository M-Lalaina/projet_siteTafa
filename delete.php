<?php
require "connexion.php";
if (isset($_GET["id"])) {
    $usersid = $_GET["id"];
    mysqli_query($connexion,"DELETE FROM candidates WHERE id = $usersid");
    header("location:dashboard.php");
    exit(0);
}
?>