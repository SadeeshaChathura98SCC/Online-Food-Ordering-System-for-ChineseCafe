<?php require_once('dbconnection.php');
session_start();

if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}

?>
<?php require_once('insertadmin.php');?>

<?php

      if(isset($_POST['submit'])){
        $email          = $_POST['email'];
        $subject        = $_POST['subject'];
        $message        = $_POST['message'];

        $to                   ="{$email}";
        $mail_subject         ="ChineseCafe Restarant - Customize Order";
        $email_body           ="{$subject} \r\n \r\n";
        $email_body           .="{$message }";
        $email_body           .="Message :" .nl2br(strip_tags($message));
        $headers = "From: chinesecafeveyangoda@gmail.com\r\nReply-To: chinesecafeveyangoda@gmail.com";

        $send_mail_result = mail($to, $mail_subject, $email_body, $headers);

        if($send_mail_result){
          echo "Message sent";
        }else{
          echo "Message not sent";
        }
      }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="dasboard.css" />
    <script src="dashboard.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/332a215f17.js"
      crossorigin="anonymous"
    ></script>
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
                    <td colspan="2"><img src="Apics/user.png" width="240" height="150"  style="margin-left:85px; margin-bottom:20px; border-radius:50%;">
                    
                    </td>
                </tr>
            
                    <?php if(isset($_SESSION['admin_email'])) {?>
                    <tr>
                        <td class="table-topic">User:</td>
                        <td class="table-font">Admin</td>
                    </tr>
                 
                    <tr>
                        <td class="table-topic">Email:</td>
                        <td class="table-font"><?php echo $_SESSION['admin_email'];?></td>
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

         <form  method="post" action="">
            <div class="form-group">
                <input type="password" class="form-control" name="opass" id="exampleInputPassword1" placeholder="Enter Current Password">
            </div><div class="form-group">
                <input type="password" class="form-control" name="npass" id="exampleInputPassword1" placeholder="Enter New Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="cpass" id="exampleInputPassword1" placeholder="Confirm Password">
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



    <!-- navbar -->
    <div class="home" id="home">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav class="navbar navbar-expand-xl navbar-light bg-light">
                <a href="index.php" class="navbar-brand">
                  <i class="fas fa-chart-line fa-3x nav-icon"></i>
                  <h1 class="main-title mb-0">Dashboard</h1>
                </a>
                <button
                  class="navbar-toggler ml-auto mr-0"
                  type="button"
                  data-toggle="collapse"
                  data-target="#myNav"
                  aria-controls="myNav"
                  aria-expanded="false"
                  aria-label="toggle navigation"
                >
                  <span class="bars"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="myNav">
                  <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                      <a href="index.php" class="nav-link active">Dashboard</a>
                      <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item dropdown">
                      <a
                        href=""
                        class="nav-link dropdown-toggle"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">Reports</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="sales.php" class="dropdown-item">Sales Report</a>
                       </div>
                    </li>
                    <li class="nav-item">
                        <a href="products.php"class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                      <a href="addcategory.php"class="nav-link">Categories</a>
                  </li>
                    <li class="nav-item">
                        <a href="index.php"class="nav-link">Orders</a>
                    </li>
                    <li class="nav-item">
                      <a href="payment.php"class="nav-link">Payments</a>
                  </li>
                  <li class="nav-item">
                      <a href="reviews.php"class="nav-link">Reviews</a>
                  </li>
                    <li class="nav-item dropdown">
                        <a href=""class="nav-link dropdown-toggle fas fa-user"id="navbarDropdown"
                        role="button"data-toggle="dropdown"aria-haspopup="true" aria-expanded="false" style="margin-top:5px"></a> 
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"  style="left:-80px; margin-top:10px;">
                        <a href=""class="dropdown-item fas fa-user" data-toggle="modal" data-target="#profile">  Profile</a>
                            <a href=""class="dropdown-item fas fa-cogs" data-toggle="modal" data-target="#settings">  Settings</a>
                            <a href="logout2.php"class="dropdown-item fas fa-sign-out-alt">  Logout</a>
                        </div>               
                        </li>
                  </ul>
               </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!---End of the Navbar--->

       <!---Summary Board--->
       <section class="mt-5">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="sum-board info-1">
            <i class="fa far fa-user"></i>
            <div class="count">2,257</div>
            <div class="title">Customers</div>
          </div>
                </div>
        <!---------->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="sum-board info-2">
            <i class="fas fa-shopping-cart"></i>
            <div class="count">120</div>
            <div class="title">Products</div>
          </div>
                </div>
        <!---------->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="sum-board info-3">
            <i class="far fa-thumbs-up"></i>
            <div class="count">2,257</div>
            <div class="title">Orders</div>
          </div>
                </div>
        <!---------->
        </div>
      </section>
      <!---End of the summary Board-->

       <!---table Section---->
       <section>
        <div class="container" id="order">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="active-member">
                  <div class="table-responsive">
                    <table class="table table-xs mb-0">
                      <thead>
                        <tr>
                          <th>Order No.</th>
                          <th>Customer</th>
                          <th>Order Date</th>
                          <th>Total Price</th>
                          <th>Payment Method</th>
                          <th>Payment Status</th>
                          <th>Status</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php 

                            $query = "SELECT orders.*, payment.*, customer.*, product.* FROM (((orders INNER JOIN payment ON orders.OID = payment.OID)
                            INNER JOIN customer ON orders.CID = customer.CID) INNER JOIN product ON orders.PID = product.PID) ORDER BY orders.OID DESC";
                            $result = mysqli_query($connection, $query);
  
                            while($row = mysqli_fetch_array($result)){
                              $filenames = explode(",", $row['pimage']);
                              ?>
                        <tr>
                          <td>
                          <div class="modal fade" id="myModal<?php echo $row['OID'];?>">
                                <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    
                                  <div class="modal-header">
                                    <h5 style="font-weight: bold;"><?php echo $row['pname'];?></h5>
                                   
                                  </div>
                                  <div class="modal-body">
                                   <table>
                                    <tr>
                                        <td colspan="2"><img src="imageup/server/uploads/<?php echo $filenames[0];?>" width="240" height="150">
                                      
                                        </td>
                                    </tr>
                                        <tr>
                                          <td class="table-topic">Item-Code</td>
                                          <td class="table-font"><?php echo $row['itemcode'];?></td>
                                      </tr>
                                       <tr>
                                           <td class="table-topic">Order No.</td>
                                           <td class="table-font"><?php echo $row['OID'];?></td>
                                       </tr>
                                       <tr>
                                           <td class="table-topic">Qty</td>
                                           <td class="table-font"><?php echo $row['qty'];?></td>
                                       </tr>
                                       <tr>
                                           <td class="table-topic">Total</td>
                                           <td class="table-font">Rs:<?php echo $row['total'];?></td>
                                       </tr>
                                       
                                       <tr>
                                        <td class="table-topic">Date</td>
                                        <td class="table-font"><?php echo $row['date'];?></td>
                                       </tr>
                
                                       <tr>
                                           <td class="table-topic">Time</td>
                                           <td class="table-font"><?php echo $row['time'];?></td>
                                       </tr>


                                        <div class="mailform">
                                            <div class="subtopic">
                                                <h3>Send email to customer</h3>
                                            </div>
                                            <br>

                                            <form action="" method="post">
                                              <p>
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email" required>
                                              </p>
                                              <p>
                                                <label for="subject">Subject</label>
                                                <input type="text" name="subject" id="subject" required>
                                              </p>
                                              <p>
                                                <label for="message">Message</label>
                                                <textarea type="message" name="message" id="message" cols="15" rows="10" required></textarea>
                                              </p>
                                              <p>
                                                <button type="submit" class="send_email" name="submit">Send message</button>
                                              </p>
                                            </form>

                                        
                                          <br>
                                          <br>
                                          <br>
                                          <br>

                                        </div>
                                      </div>
                                   </table>
                                  </div>
                                
                                </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $row['OID'];?>" class="btn-view"><?php echo $row['OID'];?></a>
                         
                         
                            </div>
                           </td>
                          <td>
                          <div class="modal fade" id="myModal<?php echo $row['CID'];?>">
                                <div class="modal-dialog modal-l">
                                <div class="modal-content">
                                    
                                  <div class="modal-header">
                                    <h5 style="font-weight: bold;"><?php echo $row['fname']." ".$row['lname'];?></h5>
                                   
                                  </div>
                                  <div class="modal-body">
                                   <table>
                                    
                                        <tr>
                                          <td class="table-topic">Email</td>
                                          <td class="table-font"><?php echo $row['email'];?></td>
                                      </tr>
                                       <tr>
                                           <td class="table-topic">Address</td>
                                           <td class="table-font"><?php echo $row['address'].", ".$row['state'].", ".$row['city']; ?></td>
                                       </tr>
                                       <tr>
                                           <td class="table-topic">Delivery Address</td>
                                           <td class="table-font"><?php echo $row['delivery_address'].", ".$row['delivery_state'].", ".$row['delivery_city']; ?></td>
                                       </tr>
                                       <tr>
                                           <td class="table-topic">Phone Number</td>
                                           <td class="table-font"><?php echo $row['phone'];?></td>
                                       </tr>
                                   </table>
                                  </div>
                                
                                </div>
                                </div>
                            </div>
                          <a href="#"  data-toggle="modal" data-target="#myModal<?php echo $row['CID'];?>"><?php echo $row['fname']." ".$row['lname'];?></a>
                        </td>
                          <td><span><?php echo $row['date'];?></span></td>
                          <td><span>Rs:<?php echo $row['total'];?></span></td>
                          <td><span><?php echo $row['method'];?></span></td>
                          <td><span><?php echo $row['status'];?></span></td>

                          <?php 
                            $oid = $row['OID'];
                            $query = "SELECT status FROM orders WHERE OID = '$oid'";
                            $result = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_array($result)){

                           
                            ?>
                     
                          <td><i class="fa fa-circle-o text-success mr-2"><?php echo $row['status']; ?></td>

                          <?php }?>
                          <td>
                            <form action="" method="post">
                              <input type="hidden" name="oid" value="<?php echo $row['OID']; ?>">
                              <button class="btn-confirm" name="order_confirm"><i class="fas fa-check"></i></button>
                              <button class="btn-cancel"><i class="fas fa-times-circle"></i></button>
                              <button class="btn-success" name="order_success"><i class="fas fa-thumbs-up"></i></button>
                              </form>
                          </td>
                        </tr>
                        <?php }?>
                        <!----------------->
  
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      </section>
      <!---end of the table section---->
      <!---JS Chart Section--->
      <section>
        <div class="row">
              <div class="col-md-6 col-lg-5 my-5 mx-auto order-3 order-lg-2">
            <div class="card">
              <div class="card-title text-center">
              </div>
              <canvas id="pie-chart"></canvas>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 my-5 mx-auto order-2 order-lg-3">
            <div class="card">
              <div class="card-title text-center">
              </div>
              <canvas id="bar-chart"></canvas>
            </div>
          </div>
        </div>
        </section>
      <!--End of JS Chart Section---->
   







     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <!------->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!------Line chart------>
    <script src="dashboard.js"></script>
    <!-- <script src="bar.js"></script>
    <script src="pie.js"></script> -->
   
  </body>
</html>

