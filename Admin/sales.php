<?php require_once('dbconnection.php');
session_start();
require_once('delete.php');
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

    <link rel="stylesheet" type="text/css" href="asset/sweet_alert/sweetalert2.min.css">
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
                        <div class="dropdown-menu"aria-labelledby="navbarDropdown"   style="left:-80px; margin-top:10px;">
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

<section style="margin-top:30px;">
      <div  class=" col-md-6">
                  <form action="" method="post">
                  <label for="from" style="font-weight:bold; font-size:20px;">From:</label>
                  <input type="date" id="from" name="from">
                  <label for="to" style="font-weight:bold; font-size:20px;">To:</label>
                  <input type="date" id="to" name="to">
                  <input type="submit" name="orders_fromto" value="Search">
                </form>
                </div>
                </section>



      <section class="mt-5">
        <div class="container">
            <div class="cart" style="background: white;">
            <div class="table-responsive">
                <table class="table  mb-2 export-table">
                    <thead style="background: #002ca5cc;">
                        <tr class="logo-row">
                          <th style="background-color: white;" class="table-logo d-none">
                          <img src="..\pics\logo.png" width="90px" height="75px" class="ml-3 my-3">
                          </th>
                         
                        </tr>
                        <tr>
                          <th scope="col"class="text-white">Order No</th>
                            <th scope="col"class="text-white">Product Name</th>
                            <th scope="col"class="text-white">Price</th>
                            <th scope="col"class="text-white">Quantity</th>
                            <th scope="col"class="text-white">Total</th>
                            <th scope="col"class="text-white">Date</th>
                            <th scope="col"class="text-white">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    
                        $total = 0;
                        if(isset($_POST['orders_fromto'])){
                          
                          $from = date("Y-m-d", strtotime($_POST['from']));
                          $to = date("Y-m-d", strtotime($_POST['to']));
                          $query = "SELECT * FROM orders WHERE date BETWEEN '$from' AND '$to' ";

                        }else{
                          $query = "SELECT * FROM orders";
                        }
                       
                        $result = mysqli_query($connection,$query);
  
                        if(mysqli_num_rows($result) > 0){
  
                        while($row = mysqli_fetch_array($result)){
  
                          $products = explode("," , $row['PID']);
                          $qtys = explode("," , $row['qty']);
  
                          for($i = 0;$i<count($products);$i++){
                          
                              $query2 = "SELECT * FROM product WHERE PID = '$products[$i]' ";
                              $result2 = mysqli_query($connection,$query2);
  
                              $row2 = mysqli_fetch_assoc($result2);

                              $total = $total + ($row2['price'] * $qtys[$i]);

                        ?>
                      
                        <tr>
                        <td>
                            <?php echo $row['OID']; ?>
                        </td>
                        <td>
                            <span><?php echo $row2['pname']; ?></span>
                        </td>
                        <td>
                         <span><?php echo $row2['price']; ?></span>
                        </td>
                        <td>
                         <span><?php echo $qtys[$i]; ?></span>
                        </td>
                        <td>
                         <span><?php echo ($row2['price'] * $qtys[$i]); ?></span>
                        </td>
                        <td>
                         <span><?php echo $row['date']; ?></span>
                        </td>
                        <td>
                         <span><?php echo $row['time']; ?></span>
                        </td>
                        </tr>
                        <?php }}}?>
                        <!----------------->
                       
                      </tbody>

                      <td>
                       <label for="" style="color:blue; font-weight:bold; font-size:19px;">Income: &nbsp;&nbsp;</label>
                         <span style="font-weight:bold; font-size:19px;">Rs:<?php echo $total; ?></span>
                        </td>

                </table>
            </div>
            </div>
        </div>

    </section>
   <button class="btn-add fas fa-print btn-print" style="margin-bottom:25px;">  Ready to Print</button>

    <!-- end of products table -->








       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="asset/jquery.min.js"></script>
    <script src="asset/sweet_alert/sweetalert2.min.js"></script>
    <script src="app.js"></script>


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

  <!-- print view  -->
  <script>
    $( document ).ready(function() {
    $('.btn-print').on('click', function () {
        $(".table-logo").removeClass('d-none');
        var card = $('.export-table').clone();
        $('body').html('');
        $('body').append(card);
        window.print();
    });

    window.onafterprint = function(){
    window.location.reload(true);
    }
  });
    </script>
 
</body>
</html>
<?php mysqli_close($connection);?>