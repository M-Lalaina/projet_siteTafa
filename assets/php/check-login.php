<?php  
session_start();
include "connexion.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: login.php?error=Veuillez entrer un nom valide");
	}else if (empty($password)) {
		header("Location: login.php?error=Veuillez entrer un mot de passe valide");
	}else {

		// Hashing the password
		$password = md5($password);
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connexion, $sql);

        if ($result) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: dashboard.php");

        	}else {
        		header("Location: login.php?error=Le nom ou le mot de passe est incorrect");
        	}
        }else {
        	header("Location: login.php?error=Le nom ou le mot de passe est incorrect");
        }

	}
	
}else {
	header("Location: ../login.php");
}