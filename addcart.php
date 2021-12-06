
<?php


if(isset($_POST['submit_to_cart'])){

    if(!isset($_SESSION['cid'])){
        echo "Please Login for Add items to cart";
    }else{

        $cid =  $_SESSION['cid'];
        $pid = $_POST['pid'];
        $qty = $_POST['qty'];
      
        // $total = $_POST['total'];

        $query2 = "SELECT * FROM cart WHERE PID = '$pid' AND CID = '$cid'";
	    $result2 = mysqli_query($connection,$query2);

        if(mysqli_num_rows($result2) > 0){ ?>
            
            <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You Already Added this Item.'   
              })
            </script>

      <?php  }else{


            $query = "insert into cart(PID, CID, qty) values('$pid', '$cid', '$qty')";

            $run = mysqli_query($connection, $query) or die(mysqli_error());
    
            if($run){  ?>
                <script>
                Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Item Add to Cart',
                showConfirmButton: false,
                timer: 3000
              })
              </script>
           <?php  }else{
                echo "Error";
            }

        }

    }
}

?>
