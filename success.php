<?php require_once('dbconnection.php');
session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="checkout.css">
    <script src="https://kit.fontawesome.com/f50d9f31b9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Chinese Cafe Restaurant</title>
  </head>
  <body>



  <!--Profile Modal -->
  <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title " id="exampleModalLabel"><i class="fas fa-user-circle">&nbsp &nbsp Your Account</i></h3>
            </div>
            <div class="modal-body">

            <div class="modal-body">
                <table>
                <tr>
                    <td colspan="2"><img src="Pics/user.png" width="240" height="150"  style="margin-left:85px; margin-bottom:20px; border-radius:50%;">
                    
                    </td>
                </tr>
            
                    <?php if(isset($_SESSION['email'])) {?>
                    <tr>
                        <td class="table-topic">Name:</td>
                        <td class="table-font">&nbsp <?php  echo $_SESSION['fname']." ".$_SESSION['lname']; ?></td>
                    </tr>
                    <tr>
                        <td class="table-topic">Address:</td>
                        <td class="table-font">&nbsp <?php echo $_SESSION['address'].", ".$_SESSION['state'].", ".$_SESSION['city']; ?></td>
                    </tr>
                    <tr>
                        <td class="table-topic">Phone:</td>
                        <td class="table-font">&nbsp  <?php echo $_SESSION['phone']; ?></td>
                    </tr>
                    
                    <tr>
                        <td class="table-topic">Email:</td>
                        <td class="table-font">&nbsp <?php echo $_SESSION['email'];?></td>
                    </tr>
                    <?php } ?>
                </table>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <!--  -->

        <!--Profile Settings Modal -->
        <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title " id="exampleModalLabel"><i class="fas fa-cogs">&nbsp &nbsp Account Settings</i></h3>
            </div>
            <div class="modal-body">

         <form method="post" action="">
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" name="opass" placeholder="Enter Current Password">
            </div><div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" name="npass" placeholder="Enter New Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" name="cpass" placeholder="Confirm Password">
            </div>
        

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="update" class="btn btn-primary">Save changes</button>
            </div>
            </div>
            </form>
        </div>
        </div>
        <!--  -->



    <section>
        <div class="cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="mb-0 phone pl-md-2">
                            <a href="#" class="mr-2">
                                <i class="fas fa-phone mr-1"></i>
                                +94 76 8484 189
                            </a>
                         <a href="#"><i class="fas fa-paper-plane mr-1"></i>
                        chinesecafe@gmail.com
                        </a>
                        </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <div class="social-icon mr-4">
                            <p class="mb-0 d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                     <i class="fab fa-facebook"></i> </a>

                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <i class="fab fa-instagram"></i> </a>

                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <i class="fab fa-whatsapp"></i> </a>

                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <i class="fab fa-facebook-messenger"></i> </a>

                            </p>

                        </div>
                        <div class="reg">
                            <a href="register.php" class="mr-2 mb-0">Sign-Up</a>
                            <a href="login.php">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav -->
        
        <nav class="navbar navbar-expand-lg main-navbar bg-color main-navbar-color"
            id="main-navbar">
            <div class="container-fluid">
                <a href="index.php"><img src="pics\logo.png" width="90px" height="75px"></a>
                <div class="order-lg-last btn-group">
                <a href="cart.php"><i class="fas fa-shopping-cart fa-2x" style="color:#e79702;"></i></a>
                </div>
                <div class="search">
                    <input class="srch" type="search" name="" placeholder="Type to Search">
                    <a href="#"><button class="btn4">Search</button></a>
                </div>
         
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="nav" 
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i></button>

                <div class="collapse navbar-collapse" id="myNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php#About" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="mymenu.php" class="nav-link">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php#Deals" class="nav-link">My Deals</a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php#Footer" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a href=""class="nav-link dropdown-toggle fas fa-user"id="navbarDropdown"
                        role="button"data-toggle="dropdown"aria-haspopup="true" aria-expanded="false" style="margin-top:5px"></a> 
                        <div class="dropdown-menu"aria-labelledby="navbarDropdown" style="background:#f9e076">
                        <a href=""class="fas fa-user"  data-toggle="modal" data-target="#profile" style="color:#000; margin-left: 10px; font-size:18px; text-decoration:none;">&nbsp Profile</a><br><br>
                            <a href=""class="fas fa-cog"  data-toggle="modal" data-target="#settings" style="color:#000; margin-left: 10px;  font-size:18px; text-decoration:none;">&nbsp Settings</a><br><br>
                            <a href="myorders.php"class="fas fa-gift"  style="color:#000; margin-left: 10px;  font-size:18px;">&nbsp My Order</a><br><br>
                            <a href="cart.php"class="fas fa-shopping-cart" style="color:#000; margin-left: 10px; font-size:18px;">&nbsp My Cart</a><br><br>
                            <a href="logout.php" class="fas fa-sign-out-alt" style="color:#000; margin-left: 10px; font-size:18px;">&nbsp Logout</a>
                        </div>               
            
                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Of Nav -->
    </section>


    <?php 
    $products = "";
    $orderid = $_GET['order_id'];

    $query = "SELECT * FROM orders inner join customer on orders.CID = customer.CID WHERE orders.OID = '$orderid' LIMIT 1";
    $result = mysqli_query($connection,$query);
    // $row = mysqli_fetch_array($result); 

    while($row = mysqli_fetch_array($result)){
    
    $products = explode("," , $row['PID']);
    $qtys = explode("," , $row['qty']);


    $email          = $row['email'];
    $subject        = "Your Order has benn Placed.";
  
    $message = "
    <html>
    <body>
    <p>
        <b>Order ID: </b> $orderid </br>
    </p>
    ";

        for($i = 0;$i<count($products);$i++){

            $query2 = "SELECT * FROM product WHERE PID = '$products[$i]' ";
            $result2 = mysqli_query($connection,$query2);
    
            $row2 = mysqli_fetch_assoc($result2);
            
        
    $message     .=   $row2['pname'] .'-'. $qtys[$i] .'<br>';         

                    }

    $message .=  "</body>
                </html>";
                    
     $to                   ="{$email}";
     $mail_subject         ="{$subject}";
   
     $email_body           = "{$message}";
  
     $headers = "From: chinesecafeveyangoda@gmail.com\r\nReply-To: chinesecafeveyangoda@gmail.com";
     $headers .= "MIME-Version: 1.0" . "\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

     $send_mail_result = mail($to, $mail_subject, $email_body, $headers);

}
    ?>

    <section>

    <?php if(isset($_GET['order_id'])){
        $orderid = $_GET['order_id'];

        $query = "SELECT * FROM payment WHERE OID = '$orderid'";
        $result = mysqli_query($connection,$query);
        $row = mysqli_fetch_array($result);
    }?>


    <div class="text-center">
        <h1>Your Order Has been Placed.</h1>
        <h2>Your Payment is <?php echo $row['status']; ?></h2>
    </div>
  

    </section>








    <!-- Footer -->
  
    <section>
        <div class="footer">
            <div class="footerb">
                <img src="Pics/logo.png" width="120" height="105" class=" mt-4">
                <div class="mt-3">
                  <img src="Pics/payment.png" width="200" height="30">
                </div>              
            </div>
            <div class="footerb   mt-5">
                <b>Contact Us</b> <br>
                <div class="fas fa-phone mt-3">
                  +94 769 853 658 
                </div><br><br>
                <b>Delivery HotLine</b> <br>
                <div class="fas fa-phone">
                  +94 768 484 189
                </div>
            </div>
  
            <div class="footerb   mt-5">
              <b>Opening Hours</b> <br><br>
              <div>
                  Monday-Saturday 5:AM-5.30:PM
              </div> <br>
              <div>
                  Sunday 5:AM-1:PM
              </div>
            </div>
  
            <div class="footerb   mt-5">
                <b>Direction</b>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013862.3649045313!2d79.49208771236907!3d6.9620675308161974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fdf557cb8751%3A0x249b46803f112583!2sChinese%20Cafe!5e0!3m2!1sen!2slk!4v1631448977095!5m2!1sen!2slk"
               width="100%" height="130" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!-- End of Footer -->
  
   <!-- copyright -->
  
   <div class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
              <p class="navbar-text">Copyright © 2021 Chinese Cafe. All rights reserved.</p>
            </div>
          </div>
  
  
  <!-- end of copyright -->
  
  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>






    </body>
  </html>
  <?php mysqli_close($connection);?>