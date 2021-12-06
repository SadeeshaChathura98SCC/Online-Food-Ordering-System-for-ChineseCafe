<?php require_once('dbconnection.php');

if(isset($_POST['delete_cart'])){

$pid = $_POST['productid'];
$cusid = $_POST['cusid'];  // get id through query string

$query = "DELETE FROM cart WHERE PID = '$pid' AND CID ='$cusid'";
$run = mysqli_query($connection, $query) or die(mysqli_error());

    if($run){ 
        echo "Deleted Successfully";

        

    }else{
        echo "Error";
    }
}
?>