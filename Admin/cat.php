<?php require_once('dbconnection.php');?>
<?php


if(isset($_POST['submit'])){


        $cat = $_POST['cat'];

        $query = "insert into categories(catName) values('$cat')";

        $run = mysqli_query($connection, $query) or die(mysqli_error());

        if($run){ 
             echo "Submitted Successfully";
         }else{
            echo "Error";
        }

}

// if(isset($_POST['promo'])){


//         $name = $_POST['name'];
//         $des = $_POST['des'];
//         $price = $_POST['price'];
//         $image = $_POST['image'];

//         $query = "insert into promotion(promoname, description, price, image) values('$name', '$des', '$price', '$image')";

//         $run = mysqli_query($connection, $query) or die(mysqli_error());

//         if($run){ 
//              echo "Submitted Successfully";
//          }else{
//             echo "Error";
//         }

// }


?>