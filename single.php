<?php require_once('dbconnection.php');

require_once('insert.php');
?>
<?php require_once('reviews.php');?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="menu.css">
    <script src="https://kit.fontawesome.com/f50d9f31b9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Chinese Cafe Restaurant</title>
  </head>
  <body>

  <?php require_once('addcart.php');?>
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


        <!-- single product -->
  
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <?php 
                    
                        $pid = $_GET['pid'];
                        $query = "SELECT * FROM product where PID = '$pid'";
                        $result = mysqli_query($connection,$query);
                        
                        while($row = mysqli_fetch_array($result)){
                        $filenames = explode(",", $row['pimage']);
                        $catid = $row['catID'];
                       
                        ?>
                        <?php foreach($filenames as $i =>$key){ 
                          
                          ?>
                          <div class="carousel-item <?php if($i==0){ echo 'active'; } ?>">
                            <img class="d-block w-100" src="Admin/imageup/server/uploads/<?php echo trim($filenames[$i]);?>" alt="First slide" width="230" height="350" style="margin-top:100px">
                          </div>
                        <?php }?>
                        </div>
                        <?php if($i>0){?>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                        <?php }?>
                      </div>
                    </div>
                        <div class="col-md-7 mt-4">
                            <p class="setmenu text-center">Set Menu</p>
                            <h2><?php echo $row['pname']; ?></h2>
                            <p style="font-size: 20px; font-weight: bold; color: tomato;"><?php echo $row['itemcode']; ?></p>
                            <p class="price"><?php echo $row['price']; ?></p>
                            <label style="font-size: 20px; font-weight: bold;">Description:</label>
                            <ul>
                              <li><?php echo $row['description']; ?></li>
                            </ul>
                            <form action="#" method="post"> 
                            <div class="quantity">
                              <label class="mr-3" style="font-size: 20px; font-weight: bold;">Qty:</label>
                              <button class="btn4 minus-btn disabled" type="button">-</button>
                              <input type="text" name="qty" id="quantity" value="1">
                              <button class="btn4 plus-btn" type="button">+</button>
                            </div>

                            <p class="total-price">
                              <span><i>Rs:</i></span>
                              <span id="price"><?php echo $row['price']; ?></span>
                            </p>
                        
                            <div>
                              <input type="hidden" name="pid" value="<?php echo $row['PID']; ?>">
                              <button type="submit" name="submit_to_cart" class="btn3 mt-4 fas fa-shopping-cart">    Add to Cart</button> <br>
                                <a href="checkout.php"><button class="btn3 mr-5 mt-3 fas fa-shopping-bag">    Order Now</button></a>
                            </div>   
                            <?php }?>
                            </form>                  
       
                </div>

            </div>

        </div>



        <!-- end of single product -->

        <!-- Related Products -->
        <?php if(($catid != "") || ($catid != 0)) {?>
        <section class="product-section bg-img py-3">
          <div class="container">

              <div class=" row justify-content-center pb-5">
                  <div class="col-md-7 heading-section text-center">
                      <h3 class="font-weight-bold text-color glow">
                          Related Products
                      </h3>
                  </div>
              </div>

              <div class="col-12 mr-5">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                 
                    <div class="row">     
                    
                      <?php 
                      $query = "SELECT * FROM product where catID = '$catid' AND PID != '$pid'";
                      $result = mysqli_query($connection,$query);
                      while($row = mysqli_fetch_array($result)){
                        
                      $filenames = explode(",", $row['pimage']);
                      ?> 
                      <div class="col-lg-3 col-md-6 special-grid lunch">
                        <div class="gallery-single fix">
                          <img src="Admin/imageup/server/uploads/<?php echo $filenames[0];?>" class="img-fluid" alt="Image">
                          <div class="why-text">
                            <h4><?php echo $row['pname']; ?></h4>
                            <p><?php echo $row['description']; ?></p>
                            <h5> Rs:<?php echo $row['price']; ?></h5>
                          </div>
                        </div>
                        <a href="single.php?pid=<?php echo $row['PID']; ?>"><button class="btn2 mb-5 fas fa-eye">VIEW</button></a>
                        <form action="#" method="post"> 
                        <input type="hidden" name="pid" value="<?php echo $row['PID']; ?>">
                        <input type="hidden" name="qty" value="<?php echo $row['qty']; ?>">
                        <a href="cart.php"><button  class="btn2 mb-5 fas fa-shopping-cart" name="submit_to_cart">ADD</button></a>
                        </form>
                      </div>
                      <?php } ?>
                  
                    </div> 

                  </div>  
                </div>  
              </div>          

          </div>
      </section>
        <?php }?>
       <!-- End ofRelated Products -->

      
         	<!-- Start Customer Reviews -->
           <section>
          <div class="customer-reviews-box">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="heading-title text-center">
                    <h3 class="font-weight-bold text-color glow">Customer Reviews</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                  <div id="reviews" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-4">

                    <?php 
                      $no = 0;
                    	$query = "SELECT * FROM reviews inner join customer on reviews.CID = customer.CID";
                      $result = mysqli_query($connection,$query);
                      while($row = mysqli_fetch_array($result)){
                      $no++;
                    ?>
                      <div class="carousel-item text-center <?php if($no==1){ echo 'active'; }?>">
                        <div class="img-box p-1 border rounded-circle m-auto">
                          <img class="d-block w-100 rounded-circle" src="Pics/Product/quotations-button.png">
                        </div>
                        <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"><?php echo $row['fname']." ".$row['lname'];?></strong></h5>
                        <!-- <h6 class="text-dark m-0">Web Developer</h6> -->
                        <p class="m-0 pt-3"><?php echo $row['comment']; ?></p>
                      </div>
                     
                  <?php }?>

                    </div>
                    <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                      <i class="fa fa-angle-left" aria-hidden="true"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                      <span class="sr-only">Next</span>
                    </a>
                            </div>
                </div>
              </div>
            </div>
          </div>

	
 </section>
       	<!-- End Customer Reviews -->

         <!-- reviews -->
         <section id="form-section" style="background: #DAE2F8; background: -webkit-linear-gradient(to right, #D6A4A4, #DAE2F8); background: linear-gradient(to right, #D6A4A4, #DAE2F8);">
           <h2 class="h2-tag">Your Feedback is Important for Us</h2>
           <form action="" method="post" class="form-content-section" style="width: 50%; margin-top: 3%; margin-left: 25%;">
            <div class="form-group" style="  margin-left: 10px; margin-right: 10px;">
              <input type="hidden" class="form-control" name="pid" placeholder="" value="1" style="text-align: left;">
            </div>
         
            <div class="form-group" style="  margin-left: 10px; margin-right: 10px;">
            <label for="exampleInputEmail1"><b>Type your Comment here</b></label>
              <textarea class="form-control" name="comment" rows="3" required></textarea>
            </div>
      
            <button type="submit" name="submit" class="btn2 mb-5" style="width: 20%; height: 40px;">Post Comment</button>
          </form>






      <!-- <div class="container">
        <div class="row mb-5">
          <div class="col-lg-12">
          <h3 style="font-weight: bold; font-size: 30px;">Post your own review</h3>
        </div>  
        </div>

        <form>
          <div class="form-row">
              <div class="register col-lg-6">
                  <input type="email" placeholder="Email-Adress" class="form-control my-1" style="border-color: #d65106; width: 500px;">
                  <input type="text" placeholder="Name" class="form-control my-3" style="border-color: #d65106; width: 500px;">
                  <textarea name="comments" placeholder="Hey....Say Something" id="comments" rows="4" style="width: 500px; text-align: center; border-color: #d65106;"></textarea>
                  <button type="button" class="btn2 mt-3 mb-5 ml-5" style="width: 200px; height: 40px;">Submit</button>  
              </div>
       </div>

        </form>

  </div> -->

</section>

<!-- end of reviews -->

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
  
  
    <script>
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
        var valueCount
        var price = document.getElementById("price").innerText;
        function priceTotal(){
          var total = valueCount * price;
          document.getElementById("price").innerText = total
        }
        document.querySelector(".plus-btn").addEventListener("click", function(){
          valueCount = document.getElementById("quantity").value;
          valueCount++;
          document.getElementById("quantity").value=valueCount

          if (valueCount > 1){
            document.querySelector(".minus-btn").removeAttribute("disabled")
            document.querySelector(".minus-btn").classList.remove("disabled")
          }
          priceTotal()
        })

          document.querySelector(".minus-btn").addEventListener("click", function(){
          valueCount = document.getElementById("quantity").value;
          valueCount--;
          document.getElementById("quantity").value=valueCount

          if (valueCount == 1){
            document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
          }
          priceTotal()
        })

      </script>
  
    
  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>
