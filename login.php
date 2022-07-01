<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Book Shop</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <style>
          body {
               background-image: url("assets/img/bg.jpg");
               background-repeat: no-repeat;
               background-size: 100vw 100vh;
          }

          .form-control:focus {
               border-color: #28a745;
               box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
          }
     </style>
</head>

<body>
     <div class="container">
          <div class="row">
               <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card my-5 mx-5">
                         <div class="card-body">
                              <h5 class="text-center my-4">Login</h5>
                              <form action="" method="POST" class="form">
                                   <div class="my-4 mx-4">
                                        <label for="uname" class="form-label">Username :</label>
                                        <input type="text" name="uname" id="uname" class="form-control">
                                   </div>
                                   <!-- end of username field div -->
                                   <p class="mx-4" style="color: red;" id="errUname"></p>
                                   <div class="my-4 mx-4">
                                        <label for="password" class="form-label">Password :</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                   </div>
                                   <!-- end of password field div -->
                                   <p class="mx-4" style="color: red;" id="errPwd"></p>
                                   <div class="my-5 mx-5 text-center">
                                        <button class="btn btn-success btn-block w-100" id="loginBtn" name="loginBtn">LOG IN</button>
                                   </div>
                                   <!-- end of button div -->
                              </form>
                              <!-- end of login form -->
                         </div>
                         <!-- end of card body -->
                    </div>
                    <!-- end of card -->
               </div>
          </div>
          <!-- end of row -->
     </div>
     <!-- end of container -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="js/login.js"></script>
</body>

</html>