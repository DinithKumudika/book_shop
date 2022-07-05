<!-- <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Warning Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Success Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Danger Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>
    <?php require_once "assets/layout/css_links.php" ?>
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
    <div style="height: 100vh; width: 100vw; background-color: rgb(191, 190, 189,0.4);">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card my-5 mx-3">
                        <div class="card-body">
                            <h5 class="text-center my-4">Login</h5>
                            <form action="" method="POST" class="form">
                                <div class="my-4 mx-4">
                                    <label for="uname" class="form-label">Username :</label>
                                    <input type="text" name="uname" id="uname" class="form-control rounded-pill">
                                </div>
                                <!-- end of username field div -->
                                <p class="mx-4" style="color: red;" id="errUname"></p>
                                <div class="my-4 mx-4">
                                    <label for="password" class="form-label">Password :</label>
                                    <input type="password" name="password" id="password" class="form-control rounded-pill">
                                </div>
                                <!-- end of password field div -->
                                <p class="mx-4" style="color: red;" id="errPwd"></p>
                                <div class="my-5 mx-5 text-center">
                                    <button class="btn btn-success btn-block w-100 rounded-pill" id="loginBtn" name="loginBtn">LOG IN</button>
                                </div>
                                <!-- end of button div -->
                            </form>
                            <!-- end of login form -->
                        </div>
                        <!-- end of card body -->
                    </div>
                    <!-- end of card -->
                    <div class="text-center" style="margin-top: 10px;">
                        <a href="">
                            <button class="btn btn-dark rounded-pill w-50 py-2">Sign Up</button>
                        </a>
                    </div>
                    <!-- end of signup button -->
                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>

    <?php require "assets/layout/js_links.php" ?>
    <script src="assets/js/login.js"></script>
</body>

</html>