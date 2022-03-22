<?php
require('../database/db.php');

if (isset($_REQUEST['username'])){

	$username = stripslashes($_REQUEST['username']);
	$surname = stripslashes($_REQUEST['surname']);        
	$username = mysqli_real_escape_string($con,$username); 
	$surname = mysqli_real_escape_string($con,$surname); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$confirm_password = $_POST['confirm_password'];
	$date = date("Y-m-d H:i:s");
        if ($password==$confirm_password && strlen($password) >= 6){
        $query = "INSERT into `users` (username, surname, password, email, date)
VALUES ('$username', '$surname', '".md5($password)."', '$email', '$date')";
        
        $result = mysqli_query($con,$query);
    }
    else {
        echo "<div class='form'>
<h3> Nebol/la si zaregistrovaný/á.</h3>
<br/>Skús to znova <a href='registration.php'>Register</a></div>";
    }

        if($result){
            echo "<div class='form'>
<h3>Úspešne zaregistrovaný/á.</h3>
<br/>Klikni tu pre <a href='../../index.php'>Login</a></div>";
        }
    
}
?>