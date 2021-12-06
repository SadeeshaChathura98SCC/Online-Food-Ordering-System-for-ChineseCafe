<?php require_once('../dbconnection.php');?>
<?php


if(isset($_POST['submit'])){


    if(!empty($_POST['files']) || !empty($_POST['name']) || !empty($_POST['code']) || !empty($POST['price']) || !empty($_POST['discount']) ||
    !empty($_POST['cat']) || !empty($_POST['dis'])){

        // $files = $_POST['files'];

        $name = $_POST['name'];
        $code = $_POST['code'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $cat = $_POST['cat'];
        $dis = $_POST['dis'];
       

        $images = implode(", ", $_POST['uploaded_image_name']);

        $query = "insert into product(pname, itemcode, price, catID, pimage, disprice, description) values('$name', '$code', '$price', '$cat', '$images', '$discount', '$dis')";

        $run = mysqli_query($connection, $query) or die(mysqli_error());

        if($run){ 
            //  echo "Submitted Successfully";
             echo"<script>window.open('../addproduct.php','_self')</script>";

         }else{
            echo "Error";
        }
}
    else{
        echo "All Fields Required";
    }
}

?>
<?php mysqli_close($connection);?>

