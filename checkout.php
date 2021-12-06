<?php require_once('dbconnection.php');
session_start();

// require_once('insert.php');
require_once('confirmorder.php');
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

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

    <div class="col-lg-12 align-content-center">
                        <h1 style="letter-spacing: 15px; text-align: center; margin-top:50px; margin-bottom:50px;">Ready to Checkout</h1>
                    </div>
    <div class="row">
        <div class="col-8">
            <div class="container ml-4" style="background-color: #eeeeee; padding: 3px 18px 13px 18px; border: 1px solid lightgrey; border-radius: 3px; box-shadow: 0 0 2rem 0 rgba(168, 180, 194, 0.37);">
                <form id="validate" method="post" action="">

                <input type="hidden" name="merchant_id" value="1219302"> 
                <input type="hidden" name="return_url" value="http://localhost/project/success.php">
                <input type="hidden" name="cancel_url" value="http://localhost/project/checkout.php">
                <input type="hidden" name="notify_url" value="http://localhost/project/notify.php">  

                    <div class="row">
                        <div class="col-50">
                            <h3 style="margin-top:20px;">Billing Address</h3>
                            <?php if(isset($_SESSION['email'])){
                            $email = $_SESSION['email'];
                            $query = "SELECT * FROM customer WHERE email = '$email'";
                            $result = mysqli_query($connection,$query);
                            $row = mysqli_fetch_array($result);
                            ?>
                            <label style="margin-top:20px;" for="fname"><i class="fa fa-user"></i> First Name</label>
                            <input type="text" id="fname" name="first_name" placeholder="First Name" value=" <?php  echo $row['fname'];?>"  required >
                            <label style="margin-top:20px;" for="lname"><i class="fa fa-user"></i> Last Name</label>
                            <input type="text" id="lname" name="last_name" placeholder="Last Name" value=" <?php  echo $row['lname'];?>"  required >
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" value=" <?php echo $row['email']; ?>" required>
                            <label for="Phone"><i class="fa fa-envelope"></i> Phone</label>
                            <input type="text" id="Phone" name="phone" placeholder="0xxxxxxxxx" value=" <?php echo $row['phone']; ?>" required>
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="Address" value=" <?php echo $row['address']; ?>" required>
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="City" value=" <?php echo $row['city']; ?>" required>
                            <input type="hidden" name="country" value="Sri Lanka">
                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="Nildiyalanda" value=" <?php echo $row['state']; ?>" required>
                                </div>
                                <div class="col-50">
                                    <label for="zip">Postal Code</label>
                                    <input type="text" id="zip" name="zip" placeholder="12000" value="<?php echo $row['zipcode']; ?>" required>
                                </div>
                            </div>
                           
                            <?php } ?>
                        </div>
    
                     
                    </div>
                  
                    <!-- <input type="checkbox" checked="checked" name="sameadr"> Delivery address same as billing -->
                        
                                    
                <input class="btn btn-primary" id="check-addr" name="anotheraddress" value="1" type="checkbox" checked="checked" data-toggle="collapse" data-target="#address" aria-expanded="false" aria-controls="collapseExample">
                <label for="check-addr">Delivery address same as billing</label> 
                <input style="margin-left:350px;" id="check-card" class="btn btn-primary" name="pay-method" value="1" type="radio"  data-toggle="collapse" data-target="#card" aria-expanded="false" aria-controls="collapseExample">
                <label for="check-card">Online Payment</label> 
                <input style="margin-left:50px;" id="check-cash" class="btn btn-primary" name="pay-method" value="2" type="radio"  data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" checked>
                <label for="check-cash">Cash on Delivery</label> 
                
                <div class="collapse" id="address">
                    <div class="card card-body">
                                    
                        <div class="row">
                            <div class="col-50">
                                <h3 style="margin-top:20px;">Delivery Address</h3>
                                <label style="margin-top:20px;" for="adr2"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr2" name="address2" placeholder="24/7" >
                                <label for="city2"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city2" name="city2" placeholder="City">
        
                                <div class="row">
                                    <div class="col-50">
                                        <label for="state2">State</label>
                                        <input type="text" id="state2" name="state2" placeholder="State">
                                    </div>
                                </div>
                            </div>
        
                        
                        </div>
                                
                    </div>
                </div>

                <?php 
                $count= 0;
                $total = 0;
                $cusid = $_SESSION['cid'];
                $query = "SELECT * FROM cart inner join product on cart.PID = product.PID WHERE cart.CID = '$cusid' ";
                $result = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($result)){
                $count++;
                $total = $total + ($row['price'] * $row['qty']);
                ?>

                <input type="hidden" name="pid[]" value="<?php echo $row['PID']; ?>">
                <input type="hidden" name="qty[]" value="<?php echo $row['qty']; ?>">
                            
                <?php } ?>

                <input type="hidden" name="items" value="<?php echo $count; ?> Items"><br>
                <input type="hidden" name="currency" value="LKR">
                <input type="hidden" name="amount" value="<?php echo $total; ?>">  
                        
                <input type="submit" name="submit" value="Confirm Order" class="btn5">
            </form>

            </div>
        </div>
        <div class="col-4">
         <div class="container">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $count; ?></b></span></h4>
                <hr>
                <?php 
                $query2 = "SELECT * FROM cart inner join product on cart.PID = product.PID WHERE cart.CID = '$cusid' ";
                $result2 = mysqli_query($connection,$query2);
                while($row2 = mysqli_fetch_array($result2)){
                ?>
                <p><?php echo $row2['pname']; ?>x<?php echo $row2['qty']; ?> Rs:<span class="price"><?php echo number_format($row2['price']*$row2['qty'], 2);?></span></p>
                <?php }?>
                <p>Discount <span class="price" style="color:black"><b><?php if($total>5000){ echo '10'; }else{ echo '0'; }?>%</b></span></p>
                <hr>
                <p>Total <span class="price" style="color:black"><b>Rs:<?php if($total>5000){ echo number_format(($total-(($total*10)/100)), 2); }else{ echo number_format($total, 2); }  ?></b></span></p>
            </div>
    
    </div>
       
    </div>
    
    <!-- script validate js -->
    <script>
        $('#validate').validate({
            roles: {
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                },
                email: {
                    required: true,
                },
                address: {
                    required: true,
                },
                city: {
                    required: true,
                },
                state: {
                    required: true,
                },
                zip: {
                    required: true,
                },
                cardname: {
                    required: true,
                },
                cardnumber: {
                    required: true,
                },
                expmonth: {
                    required: true,
                },
                expyear: {
                    required: true,
                },
                cvv: {
                    required: true,
                },
               
            },
            messages: {
                flname:"Please input first name*",
                lname:"Please input last name*",
                email:"Please input email*",
                city:"Please input city*",
                address:"Please input address*",
                state:"Please input state*",
                zip:"Please input address*",
                cardname:"Please input card name*",
                cardnumber:"Please input card number*",
                expmonth:"Please input exp month*",
                expyear:"Please input exp year*",
                cvv:"Please input cvv*",
            },
        });
    </script>


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
                      <button class="btn form-btn m-1 mb-4">Subscribe</button>
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
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


      <script>
        $( document ).ready(function() {
            $("#check-cash").click(function(){
                $("#card").removeClass("show");
            });
        });
    </script>



    </body>
  </html>
  <?php mysqli_close($connection);?>