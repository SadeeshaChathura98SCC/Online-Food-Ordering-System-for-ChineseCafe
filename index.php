<?php require_once('dbconnection.php');
session_start();

require_once('insert.php');
require_once('addcart.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="main.css">
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
                <a href=""><img src="pics\logo.png" width="90px" height="75px"></a>
                <div class="order-lg-last btn-group">
                <a href="cart.php"> <i class="fas fa-shopping-cart fa-2x" style="color:#e79702; margin-top:5px; font-size:35px;"></i></a>
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
                            <a href="#About" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="mymenu.php" class="nav-link">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a href="#Deals" class="nav-link">My Deals</a>
                        </li>

                        <li class="nav-item">
                            <a href="#Footer" class="nav-link">Contact Us</a>
                        </li> 
                        <li class="nav-item dropdown" style="right: 10px;">
                        <a href=""class="nav-link dropdown-toggle fas fa-user"id="navbarDropdown"
                        role="button"data-toggle="dropdown"aria-haspopup="true" aria-expanded="false" style="margin-top:5px"></a> 
                        <div class="dropdown-menu"aria-labelledby="navbarDropdown" style="background:#f9e076">
                            <a href=""class="fas fa-user"  data-toggle="modal" data-target="#profile" style="color:#000; margin-left: 10px; font-size:18px; text-decoration:none;">&nbsp Profile</a><br><br>
                            <a href=""class="fas fa-cog"  data-toggle="modal" data-target="#settings" style="color:#000; margin-left: 10px;  font-size:18px; text-decoration:none;">&nbsp Settings</a><br><br>
                            <a href="myorders.php"class="fas fa-gift"  style="color:#000; margin-left: 10px;  font-size:18px; text-decoration:none;">&nbsp My Order</a><br><br>
                            <a href="cart.php"class="fas fa-shopping-cart" style="color:#000; margin-left: 10px; font-size:18px; text-decoration:none;">&nbsp My Cart</a><br><br>
                            <a href="logout.php"class="fas fa-sign-out-alt" style="color:#000; margin-left: 10px; font-size:18px; text-decoration:none;">&nbsp Logout</a>
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
                <h1 class="font-weight-bold ">Take Away</h1>
             </div>
             <h3 class="font-weight-bold">Healthy Food, Happy Mood</h3>
             <div class="actions">
                <a href="mymenu.php" class="btn-get-started bg-warning">Order Now</a>
             </div>

         </div>
     </section>

    <!-- End ofHero Section -->

    <!-- About Us -->
    <section id="variety" class="variety pt-4">
        <div class="container" id="About">
            <div class="section-title">
                <h2 class="text-center font-weight-bold">Who We Are...</h2>
            </div>
                <div class="row">
                    <div class="col-12  col-sm-12  col-md-12  col-lg-6  col-xl-6">
                        <div class="about-img">
                          <img src="Pics/Hotel.jpg " width="550" height="400" >
                            </div>
                        </div>
                <div class="col-12  col-sm-12  col-md-12  col-lg-6  col-xl-6">
                    <div class="about-para" style="  text-align: justify; text-justify: inter-word;">
                <p>
                    We are proud to recall that the year 2011 marked the beginning of a new journey for the Chinese cafe restaurant industry. 
                    For more than 10 years now, we have been committed to providing quality customer service with delicious, tasty food and beverages.
                     We invite you to come to our restaurant to taste delicious, clean food consisting of Sri Lankan, Indian, Thai as well as Chinese food.
                </p>
                <p>
                    We stand for something Good in everything we do. That means carefully sourced premium ingredients
                    from like minded purveyors we admire and love; thoughtful, well-crafted and responsible design for its place;
                    and deep community support through donations, events and volunteering. Thanks for Standing with us!
                </p>
                    </div>
                 </div>
            </div>   
    </div>

        </section>


    <!-- End of About Us -->

    <!-- Variety -->
    <section id="variety" class="variety pt-4">
        <div class="container"  id="Deals">
            <div class="section-title">
                <h2 class="text-center font-weight-bold" data-target="#Deals">Family Combo</h2>
            </div>
                <p style="  text-align: justify; text-justify: inter-word;">
                    We stand for something Good in everything we do. That means carefully sourced premium ingredients
                    from like minded purveyors we admire and love; thoughtful, well-crafted and responsible design for its place;
                    and deep community support through donations, events and volunteering. Thanks for Standing with us!
                </p>
            

            <div class="row">

                <?php 
                $query = "SELECT * FROM promotion inner join product on promotion.pid = product.PID";
                $result = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($result)){
                ?>

                <div class="col-md-4 align-items-stretch">
                    <div class="card">
               
                  
                        <div class="card-img">
                            <img src="Admin/imageup/server/uploads/<?php echo $row['pimage']; ?>" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                            <?php echo $row['pname']; ?>
                            </h5>

                            <p class="card-text">
                            <?php echo $row['description']; ?></p>

                                <p>Rs: <?php echo $row['price']; ?></p>

                            </p>
                            <form action="#" method="post">
                            <div class="read-more">
                                <input type="hidden" name="qty" value="1">
                                <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
                                <button type="submit" name="submit_to_cart" class="btn3 mt-4 fas fa-shopping-cart" style="background:none; border:none; font-weight:bold;">    Add to Cart</button> </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
<!-- End of Variety -->

         <!-- Product Section -->
         <section class="product-section bg-img py-3">
            <div class="container">
                <div class=" row justify-content-center pb-5">
                    <div class="col-md-7 heading-section text-center">
                        <h2 class="font-weight-bold text-color glow">
                            Take Away
                        </h2>
                    </div>
                </div>
                <div class="row">
                    
                <?php 
                    //   $query = "SELECT * FROM product  LIMIT 4";
                      $query = "SELECT * FROM product inner join categories on product.catID = categories.catID ORDER BY rand() LIMIT 4";
                      $result = mysqli_query($connection,$query);
                      while($row = mysqli_fetch_array($result)){
                        
                      $filenames = explode(",", $row['pimage']);
                      ?> 
                    <div class="col-md-3 d-flex">
                        <div class="product glow">
                            <div class="img d-flex align-items-center justify-content-center"
                                 style="background-image:url(Admin/imageup/server/uploads/<?php echo $filenames[0];?>);">
                                  
                            <div class="icons">
                            <form action="#" method="post"> 
                                 <p class="icon-block d-flex">
                                 <a href=""class="d-flex align-items-center justify-content-center">
                                
                                 <input type="hidden" name="pid" value="<?php echo $row['PID']; ?>">
                                 <input type="hidden" name="qty" value="<?php echo $row['qty']; ?>">
                                 <i class=""></i> <button type="submit" name="submit_to_cart" class="btn3 mt-1 fas fa-shopping-cart"></button>
                                 </a>
                                 
                               
                                 <a href="single.php?pid=<?php echo $row['PID']; ?>"><button class="btn2 mt-1 fas fa-eye"></button></a>
                                 <i class=""></i>
                                 </a>
                               
                                </p>
                                </form> 
                             </div>
                            
                         
                            </div>
                         <div class="text text-center">
                             <span class="category font-weight-bold"><?php echo $row['catName']?></span>
                             <h5 style="color:#ebe703; font-weight:bold;"><?php echo $row['pname']?></h5>
                             <h6 class="text-white"><?php echo $row['description']?></h6>
                             <span class="price">Rs:<?php echo $row['price']?></span>
                         </div>
                    </div>  
                    </div>
                
                    <?php } ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <a href="mymenu.php"class="btn btn-prod d-block" style="font-weight:bold;">
                            View all products
                            <i class="fas fa-carrot"></i>
                        </a>
                    </div>
                </div>
            </div>
    
        </section>

 <!-- End of the product Section -->

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

  <section  id="Footer">
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
