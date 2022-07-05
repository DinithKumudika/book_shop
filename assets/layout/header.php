<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <meta name="description" content="" />
     <meta name="author" content="" />
     <title>Book Shop</title>
     <?php require_once "../../assets/layout/css_links.php" ?>
     <link href="../../assets/css/styles.css" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">
     <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
          <!-- Navbar Brand-->
          <a class="navbar-brand ps-3" href="index.html">Book Shop POS</a>
          <!-- Sidebar Toggle-->
          <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

          <!-- Navbar-->
          <ul class="navbar-nav ms-auto me-md-3 me-0 my-2 my-md-0">
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                         <li><a class="dropdown-item" href="#!">Settings</a></li>
                         <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                         <li>
                              <hr class="dropdown-divider" />
                         </li>
                         <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
               </li>
               <!-- <li class="nav-item mx-3">
                    <button class="btn btn-dark btn-outline-primary fs-6 fw-bold border-2"></button>
                </li> -->
          </ul>
     </nav>
     <div id="layoutSidenav">
          <div id="layoutSidenav_nav">
               <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                         <div class="nav">
                              <?php require_once "../../assets/layout/sidebar.php" ?>
                         </div>
                    </div>
                    <div class="sb-sidenav-footer">
                         <div class="small">Logged in as:</div>
                         Default User
                    </div>
               </nav>
          </div>
          <div id="layoutSidenav_content">
               <main>