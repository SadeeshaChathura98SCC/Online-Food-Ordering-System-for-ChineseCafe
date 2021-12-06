<?php
require_once('dbconnection.php');


$target_dir = "imageup/server/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["promo"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, PNG files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

  
  $name = $_POST['name'];
  $des = $_POST['des'];
  $price = $_POST['price'];
  $code = $_POST['code'];
  $image =  basename($_FILES["image"]["name"]);

  $query = "insert into product(pname, itemcode, description, price, pimage) values('$name', '$code', '$des', '$price', '$image')";
  $run = mysqli_query($connection, $query) or die(mysqli_error());
  $pid = $connection->insert_id;

  $query2 = "insert into promotion(pid) values('$pid')";
  $run2 = mysqli_query($connection, $query2) or die(mysqli_error());

  if($run && $run2){ 
    echo"<script>window.open('../upload.php','_self')</script>";
   }else{
      echo "Error";
  }
 
}

?>