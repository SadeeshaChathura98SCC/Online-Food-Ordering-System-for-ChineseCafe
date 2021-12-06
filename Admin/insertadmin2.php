<?php require_once('dbconnection.php');?>
<?php

if(isset($_POST['login_c'])){

    $email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM login WHERE email ='$email' AND password = '$password' AND utype = 'cheff'";
	$result = mysqli_query($connection,$query);

	if(mysqli_num_rows($result) > 0){

    $_SESSION['admin_email'] = $email;

	$row = mysqli_fetch_assoc($result);
	
			echo"<script>window.open('dashboard2.php','_self')</script>";
	}
	else{
	echo"Login Error";
}
}

if(isset($_POST['update'])){

	$email = $_SESSION['admin_email'];
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];

    if($npass == $cpass){

    $query = "UPDATE login SET  password='$npass'  WHERE email = '$email'";
    $run = mysqli_query($connection, $query) or die(mysqli_error());
    
    if($run){ 
        echo "updated Successfully";
    }else{
       echo "Error";
   }
    
}
}

?>
<?php mysqli_close($connection);?>