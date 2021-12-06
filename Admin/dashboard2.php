<?php require_once('dbconnection.php');
session_start();

if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}

?>
<?php require_once('insertadmin2.php');?>
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
                        <td class="table-font">Cheff</td>
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

         <form>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            </div><div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter New Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
            </div>
         

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
                <a href="#" class="navbar-brand">
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
                      <a href="dashboard2.php" class="nav-link active" style="margin-right:750px;">Dashboard</a>
                      <span class="sr-only">(current)</span>

                    <li class="nav-item dropdown">
                        <a href=""class="nav-link dropdown-toggle fas fa-user"id="navbarDropdown"
                        role="button"data-toggle="dropdown"aria-haspopup="true" aria-expanded="false" style="margin-top:5px"></a> 
                        <div class="dropdown-menu"aria-labelledby="navbarDropdown"  style="left:-80px; margin-top:10px;">
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
                          <th>Status</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    
                                  <div class="modal-header">
                                    <h5 style="font-weight: bold;">Chicken Fried Rice</h5>
                                   
                                  </div>
                                  <div class="modal-body">
                                   <table>
                                    <tr>
                                        <td colspan="2"><img src="Apics/frice.jpg" width="240" height="150">
                                      
                                        </td>
                                    </tr>
                                    
                                        <tr>
                                          <td class="table-topic">Item-Code</td>
                                          <td class="table-font">CF-1234</td>
                                      </tr>
                                       <tr>
                                           <td class="table-topic">Category</td>
                                           <td class="table-font">Set Menus</td>
                                       </tr>
                                       <tr>
                                           <td class="table-topic">Price</td>
                                           <td class="table-font">Rs:550</td>
                                       </tr>
                                       
                                       <tr>
                                        <td class="table-topic">Portion</td>
                                        <td class="table-font">2 Members</td>
                                       </tr>
                
                                       <tr>
                                           <td class="table-topic">Description</td>
                                           <td class="table-font">Chicken Fried Rice with Choupsey and Chillie Paste</td>
                                       </tr>
                                   </table>
                                  </div>
                                
                                </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#myModal" class="btn-view">412125411521</a>
                          </td>
                          <td>
                          <a href="#">Janaka Sidath</a>
                        </td>
                          <td><span>2021-09-18</span></td>
                          <td><span>Rs:1600.00</span></td>
                          <td><span>Card Payment</span></td>
                          <td><i class="fa fa-circle-o text-success mr-2"></i>Confirmed</td>
                          <td>
                              <button class="btn-confirm">Confirm</button>
                              <button class="btn-cancel">Cancel</button>
                          </td>
                        </tr>
                        <!----------------->
                        <tr>
                            <td>
                              <a href="#">412125411521</a>
                            </td>
                            <td>
                            <a href="#">Sadeesha Chathura</a>
                        </td>
                            <td><span>2021-09-18</span></td>
                            <td><span>Rs:1600.00</span></td>
                            <td><span>Cash on Delivery</span></td>
                            <td><i class="fa fa-circle-o text-warning mr-2"></i>Pending</td>
                            <td>
                            <button class="btn-confirm">Confirm</button>
                              <button class="btn-cancel">Cancel</button>
                            </td>
                          </tr>
                        <!----------------->
                        <tr>
                            <td>
                              <a href="#">412125411521</a>
                            </td>
                            <td>
                            <a href="#">Sahan Madumal</a>
                        </td>
                            <td><span>2021-09-18</span></td>
                            <td><span>Rs:1600.00</span></td>
                            <td><span>Card Payment</span></td>
                            <td><i class="fa fa-circle-o text-success mr-2"></i>Confirmed</td>
                            <td>
                                <button class="btn-confirm">Confirm</button>
                              <button class="btn-cancel">Cancel</button>
                            </td>
                          </tr>
                        <!----------------->
                        <tr>
                            <td>
                              <a href="#">412125411521</a>
                            </td>
                            <td>
                            <a href="#">Upeksha Rajapaksha</a>
                        </td>
                            <td><span>2021-09-18</span></td>
                            <td><span>Rs:1600.00</span></td>
                            <td><span>Cash on Delivery</span></td>
                            <td><i class="fa fa-circle-o text-warning mr-2"></i>Pending</td>
                            <td>
                                <button class="btn-confirm">Confirm</button>
                                <button class="btn-cancel">Cancel</button>
                            </td>
                          </tr>
                        <!----------------->
                          <tr>
                            <td>
                              <a href="#">412125411521</a>
                            </td>
                            <td>
                            <a href="#">Sithum Manodara</a>
                        </td>
                            <td><span>2021-09-18</span></td>
                            <td><span>Rs:1600.00</span></td>
                            <td><span>Cash on Delivery</span></td>
                            <td><i class="fa fa-circle-o text-warning mr-2"></i>Pending</td>
                            <td>
                                <button class="btn-confirm">Confirm</button>
                                <button class="btn-cancel">Cancel</button>
                            </td>
                          </tr>
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

