<?php require_once('dbconnection.php');?>
<?php 
session_start();

require_once('insertadmin2.php');?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="mainl.css">
    <script src="https://kit.fontawesome.com/f50d9f31b9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Admin Login</title>
  </head>
  <body>
      <!-- login -->

    <section class="form my-4 mx-5">
        <div class="container col-lg-6" style="margin-top: 20vh;">
            <div class="row no-gutters" style="background: rgb(231, 226, 153); border-radius: 30px; box-shadow: 12px 12px 22px gray;">
                <div class="col-lg-10 px-5 pt-3" style="margin-left: 150px;">
                    <img src="Apics/logo.png" width="115" height="95" style="margin-left: 80px;">
                    <h4 class="mt-4"  style="margin-left: 30px;"><b>Sign into your Account</b></h4>
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-lg-8">
                                <input type="email" placeholder="Emal-Address"  name="email" class="form-control my-3 p-3" required>
                            </div>
                        </div>
                         <div class="form-row">
                             <div class="col-lg-8">
                                <input type="password" placeholder="Password" name="password" class="form-control my-3" required>
                                <input type="checkbox" class="ml-3"><b>Remember Me</b>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-8">
                               <button type="submit" name="login_c" class="btn1 mt-3 mb-4">Login</button>
                               <a href="#" class="link1">Forgot Your Password?</a>
                               <a href="login.php" class="link2">SignIn as Admin?</a>
                           </div>
                        </div>                    
                    </form>
                </div>
            </div>
        </div>
        
    </section>


      <!-- End of login -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>