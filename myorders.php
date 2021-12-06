<?php require_once('dbconnection.php');
session_start();

require_once('insert.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cart.css">
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
                            <a href="logout.php"class="fas fa-sign-out-alt" style="color:#000; margin-left: 10px; font-size:18px;">&nbsp Logout</a>
                        </div>               
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Of Nav -->
    </section>

        <!-- Hero Section -->

        <section id="hero">
            <div class="hero-container">
                <div class="hero-logo">
                   <h1 class="font-weight-bold " style="font-size: 50px;">My Orders</h1>
                </div>
               
            </div>
        </section>
   
       <!-- End ofHero Section -->

    <!-- cart -->
    <section class="mt-5">
        <div class="container">
            <div class="cart">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"class="text-white">Product</th>
                            <th scope="col"class="text-white">Price</th>
                            <th scope="col"class="text-white">Quantity</th>
                            <th scope="col"class="text-white">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $subtotal = 0;
                    $total = 0;

                      if(isset($_SESSION['cid'])){

                      $cid = $_SESSION['cid'];

                      $query = "SELECT * FROM orders WHERE CID = '$cid' AND status != 'success' ";
                      $result = mysqli_query($connection,$query);

                      if(mysqli_num_rows($result) > 0){

                      while($row = mysqli_fetch_array($result)){

                        $products = explode("," , $row['PID']);
                        $qtys = explode("," , $row['qty']);

                        for($i = 0;$i<count($products);$i++){
                        
                            $query2 = "SELECT * FROM product WHERE PID = '$products[$i]' ";
                            $result2 = mysqli_query($connection,$query2);

                            $row2 = mysqli_fetch_assoc($result2);

                            $filenames = explode(",", $row2['pimage']);
                    ?>
                        <tr>
                            <td>
                                <div class="main">
                                    <div class="d-flex">
                                        <img src="Admin/imageup/server/uploads/<?php echo $filenames[0];?>" width="145" height="98">
                                    </div>
                                    <div class="des">
                                        <p><?php echo $row2['pname']; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6><?php echo $row2['price']; ?></h6>
                            </td>
                            <td>
                            <h6><?php echo $qtys[$i]; ?></h6>
                            </td>
                            <td>
                                <h6>Rs:<?php echo ($row2['price'] * $qtys[$i]); ?></h6>
                                <?php $subtotal = $subtotal + ($row2['price'] * $qtys[$i]); ?>
                                <?php $total = $total + ($row2['price'] * $qtys[$i]); ?>
                            </td>
                        </tr>
                        <?php }}}else{ ?>
                        <tr>
                            <td colspan="4" class="text-center"><h3>No Items Added.</h3></td>
                        </tr>
                  <?php  }
                } else{ ?>
                         <tr>
                            <td colspan="4" class="text-center"><h3>Please Login to View Your Orders.</h3></td>
                        </tr>
                     
                  <?php  } ?>
                        <!----->
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </section>
    <div class="col-lg-4 offset-lg-4">
        <div class="checkout">
      
        <?php 
        $query = "SELECT * FROM orders WHERE CID = '$cid' ORDER BY OID DESC";
        $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        ?>

        <p style="color:#3CB043; font-size:17px"> <b> <u> Order Status</u></b> </p>
        <?php if($row['status'] == "pending") {?>
        <p style="color:#ff0000; font-size:17px"> <b> Your Order is pending</b> </p>
        <?php }else if($row['status'] == "confirmed"){?>
        <p style="color:#ff0000; font-size:17px"> <b> Your Order has been confirmed & on process.</b> </p>
        <?php }}?>
            <ul>
                <li class="subtotal">SubTotal
                    <span>Rs:<?php echo $subtotal; ?></span>
                </li>
                <li class="cart-total">Total
                <span>Rs:<?php echo $total; ?></span></li>
            </ul>
        </div>
    </div>

   <!-- end of cart -->


    <!-- follow us -->

<section class="follow">
    <div class="container">
      <div class="row justify-content pb-5">
        <div class="col-md-12 heading-section text-center">
          <h2 class="font-weight-bold texts-color glow mt-5">
            CONNECT WITH US
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 d-flex justify-content-md-end">
          <div class="socials-icon mr-4">
            <p class="mb-5 d-flex">
              <a href="#" class="d-flex align-items-center justify-content-center">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="#" class="d-flex align-items-center justify-content-center">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="d-flex align-items-center justify-content-center">
                <i class="fab fa-whatsapp"></i>
              </a>
              <a href="#" class="d-flex align-items-center justify-content-center">
                <i class="fab fa-facebook-messenger"></i>
              </a>
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- End of Follow us -->
  
  
   <!-- Filler Section -->
  
  <section id="subscribe" class="py-5">
      <div class="container">
          <div class="row align-items-center my-5">
              <div class="col-sm-12 mx-auto-text-center mb-5">
                  <h4 class="dispaly-3 mb-5 text-uppercase text-white text-center">
                      Subscibe for More Offers
                  </h4>
                  <form class="form-inline d-flex justify-content-center">
                      <input type="text" class="form-control w-35" placeholder="Email">
                      <button class="btn form-btn m-1">Subscribe</button>
                  </form>
              </div>
          </div>
      </div>
  </section>
  
    <!-- End of Filler Section -->
  
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
              <b>Address</b> <br>
              <div class="fas fa-map-marker-alt mt-3" style="text-align:left;">
               &nbsp; No: 24/7, <br><br> Bus Stand Rd, <br><br> Veyangoda
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
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>
  <?php mysqli_close($connection);?>