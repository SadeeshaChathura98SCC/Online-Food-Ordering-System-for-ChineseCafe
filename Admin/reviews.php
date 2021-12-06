<?php require_once('dbconnection.php');
session_start();
?>
<?php require_once('insertadmin.php');?>
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
    <link rel="stylesheet" href="products.css" />
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
         </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
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
                        <a href="" class="dropdown-item">Sales Report</a>
                       </div>
                    </li>
                    <li class="nav-item">
                        <a href="products.php"class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                      <a href="addcategory.php"class="nav-link">Categories</a>
                  </li>
                  <li class="nav-item">
                      <a href="index.php#Order"class="nav-link">Orders</a>
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
                        <div class="dropdown-menu"aria-labelledby="navbarDropdown"  style="left:-80px; margin-top:10px;">
                        <a href=""class="dropdown-item fas fa-user" data-toggle="modal" data-target="#profile">  Profile</a>
                            <a href=""class="dropdown-item fas fa-cogs" data-toggle="modal" data-target="#settings">  Settings</a>
                            <a href=""class="dropdown-item fas fa-sign-out-alt">  Logout</a>
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


      <!-- products table -->

             

      <section class="mt-5" style="margin-bottom:25px;">
        <div class="container">
            <div class="cart" style="background: white;">
            <div class="table-responsive">
                <table class="table  mb-2">
                    <thead style="background: #002ca5cc;">
                    
                        <tr>
                            <th scope="col"class="text-white">Product Code</th>
                            <th scope="col"class="text-white">Customer Name</th> 
                            <th scope="col"class="text-white">Comment</th>
                            <th scope="col"class="text-white">Date</th>
                            <th scope="col"class="text-white">Time</th>
                        </tr>
                    </thead>
                    <?php
                     $query = "SELECT reviews.*, customer.*, product.* FROM (((reviews INNER JOIN customer ON reviews.CID = customer.CID)
                     INNER JOIN product ON reviews.PID = product.PID) INNER JOIN categories ON product.catID = categories.catID)";
                     $result = mysqli_query($connection, $query); 
                      
                      while($row = mysqli_fetch_array($result)){
                      $filenames = explode(",", $row['pimage']);
                        ?>
                        <tr>
                        <td>
                           <!-- popup -->
                                     
                           <div class="modal fade" id="myModal<?php echo $row['itemcode']; ?>">
                                         <div class="modal-dialog modal-xl">
                                         <div class="modal-content">
                                             
                                           <div class="modal-header">
                                             <h5 style="font-weight: bold;"><?php echo $row['pname']; ?></h5>
                                            
                                           </div>
                                           <div class="modal-body">
                                            <table>
                                             <tr>
                                                 <td colspan="2"><img src="imageup/server/uploads/<?php echo $filenames[0];?>" width="240" height="150">
                                               
                                                 </td>
                                             </tr>
                                             
                                                 <tr>
                                                   <td class="table-topic">Item-Code</td>
                                                   <td class="table-font"><?php echo $row['itemcode']; ?></td>
                                               </tr>
                                                <tr>
                                                    <td class="table-topic">Category</td>
                                                    <td class="table-font"><?php echo $row['catName']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="table-topic">Price</td>
                                                    <td class="table-font">Rs:<?php echo $row['price']; ?></td>
                                                </tr>
                         
                                                <tr>
                                                    <td class="table-topic">Description</td>
                                                    <td class="table-font"><?php echo $row['description']; ?></td>
                                                </tr>
                                            </table>
                                           </div>
                                         
                                         </div>
                                         </div>
                                     </div>
                                      <!-- end of popup -->
                                      <a href="#"  data-toggle="modal" data-target="#myModal<?php echo $row['itemcode'];?>"><?php echo $row['itemcode']; ?></a>
                      </td>
                        <td>
                           <!-- popup -->
                                     
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
                        <td>
                            <span><?php echo $row['comment']; ?></span>
                        </td>
                        <td>
                            <span><?php echo $row['date']; ?></span>
                        </td>
                        <td>
                            <span><?php echo $row['time']; ?></span>
                        </td>
                        </tr>
                      <?php }?>
                    <tbody>
                        </tbody>
                </table>
            </div>
            </div>
        </div>
    </section>

    <!-- end of products table -->








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
  <!-- <script src="dashboard.js"></script> -->
  <!-- <script src="bar.js"></script>
  <script src="pie.js"></script> -->
 
</body>
</html>
<?php mysqli_close($connection);?>