<?php require_once('dbconnection.php');?>
<?php
 $error = "";
 $error_msg = "";

if(isset($_POST['submit'])){

    if(!empty($_POST['fname']) || !empty($_POST['lname']) || !empty($_POST['address']) || !empty($POST['city']) || !empty($_POST['state']) ||
    !empty($_POST['zipcode']) || !empty($_POST['phone']) || !empty($_POST['email'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipcode = $_POST['zipcode'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $passwrod = $_POST['password'];
        $cpass = $_POST['cpass'];

        $query2 = "SELECT * FROM login WHERE email = '$email'";
	    $result2 = mysqli_query($connection,$query2);

        if(mysqli_num_rows($result2) > 0){
            $error_msg = "This Emai not Available";
        }else{

            if($passwrod == $cpass){

                $query = "insert into customer(fname, lname, address, city, state, zipcode, phone, email) values('$fname', '$lname', '$address', '$city', '$state', '$zipcode', '$phone', '$email')";
    
                $query2 = "insert into login(email, password, utype) values('$email', '$passwrod', 'customer')";
    
                $run = mysqli_query($connection, $query) or die(mysqli_error());
                $run2 = mysqli_query($connection, $query2) or die(mysqli_error());
    
                if($run && $run2){ 
                    echo "Submitted Successfully";
                }else{
                    echo "Error";
                }
    
            }
            else{
            $error = "Password doesn't Match";
            }
        }

      
    }
    else{
        echo "All Fields Required";
    }
}else{
    $error = "";
}

if(isset($_POST['login'])){

    $email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM login WHERE email ='$email' AND password = '$password'  AND utype = 'customer' ";
	$result = mysqli_query($connection,$query);

	if(mysqli_num_rows($result) > 0){

        $query2 = "SELECT * FROM customer WHERE email ='$email' ";
	    $result2 = mysqli_query($connection,$query2);

        $row2 = mysqli_fetch_assoc($result2);

        $_SESSION['email'] = $email;
        $_SESSION['cid'] = $row2['CID'];
        $_SESSION['fname'] = $row2['fname'];
        $_SESSION['lname'] =  $row2['lname'];
        $_SESSION['address'] = $row2['address'];
        $_SESSION['state'] = $row2['state'];
        $_SESSION['zipcode'] = $row2['zipcode'];
        $_SESSION['city'] = $row2['city'];
        $_SESSION['phone'] = $row2['phone'];
        

			echo"<script>window.open('index.php','_self')</script>";

	}else{
        // echo '<script>alert("Invalid Username or Password")</script>';
        $error_msg = "Invalid Username or Password";
    }

}

if(isset($_POST['update'])){

    $email =  $_SESSION['email'];

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

if(isset($_POST['updateqty'])){

    $cid = $_POST['cusid'];
    $pid = $_POST['proid'];
    $qty = $_POST['qty'];

    $query = "UPDATE cart SET qty='$qty' WHERE CID = '$cid' AND PID = '$pid' ";
    $run = mysqli_query($connection, $query) or die(mysqli_error());
    
    if($run){ 
        echo"<script>window.open('cart.php','_self')</script>";
    }else{
       echo "Error";
    }

}

?>
