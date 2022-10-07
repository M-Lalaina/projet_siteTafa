<?php
    $connection =mysqli_connect('localhost','root','', 'tafa3.0');
    if ($connection) {
            echo "connection successfull";
         }else{
             die(mysqli_connect_error($connection));
         }
?>