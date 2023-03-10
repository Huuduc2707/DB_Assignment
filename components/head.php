<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php
      if ($_GET['page'] == 'goods') echo "Goods";
      if ($_GET['page'] == 'employee') echo "Employee";
      if ($_GET['page'] == 'profile') echo "Profile";
      if ($_GET['page'] == 'supplier') echo "Supplier";
      if ($_GET['page'] == 'supermarket') echo "Supermarket";
      if ($_GET['page'] == 'import') echo "Import";
      if ($_GET['page'] == 'export') echo "Export";
    ?>

  </title>

  <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/x-icon" />
  <!-- <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/png" /> -->

  <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/png" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="assets/css/main/app.css" />
  <link rel="stylesheet" href="assets/css/main/app-dark.css" />
  <link rel="stylesheet" href="assets/css/shared/iconly.css" />
  <style>
    /* .navHead{
      font-size:1.8rem; 
      font-weight:bold;
    }
    .card-title{
      font-size:1.8rem;
      font-weight:bold;
    } */
  </style>
</head>

<body>
  <div id="app">
    <div id="sidebar" class="active">
      <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
          <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
              <a href="#"><img src="assets/images/logo/logo.png" alt="Logo" style="width: 80px; height: 80px;" /></a>
            </div>
            <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                  <g transform="translate(-210 -1)">
                    <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                    <circle cx="220.5" cy="11.5" r="4"></circle>
                    <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                  </g>
                </g>
              </svg>
              <div class="form-check form-switch fs-6">
                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer" />
                <label class="form-check-label"></label>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
              </svg>
            </div>
            <div class="sidebar-toggler x">
              <a class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item <?php if ($_GET['page'] == 'employee' || $_GET['page'] == 'profile') echo "active" ?>" <?php if ($_SESSION['lv'] == 10) echo "hidden" ?>>
              <a href="./index.php?page=employee" class="sidebar-link">
                <i class="bi bi-person-fill"></i>
                <span>Employee</span>
              </a>
            </li>

            <li class="sidebar-item <?php if ($_GET['page'] == 'supplier') echo "active" ?>" <?php if ($_SESSION['lv'] == 10) echo "hidden" ?>>
              <a href="./index.php?page=supplier" class="sidebar-link">
                <i class="bi bi-shop-window"></i>
                <span>Supplier</span>
              </a>
            </li>

            <li class="sidebar-item <?php if ($_GET['page'] == 'goods') echo "active" ?>" <?php if ($_SESSION['lv'] == 10) echo "hidden" ?>>
              <a href="./index.php?page=goods" class="sidebar-link">
                <i class="fa-regular fa-star"></i>
                <span>Goods</span>
              </a>
            </li>


            <li class="sidebar-item <?php if ($_GET['page'] == 'supermarket') echo "active" ?>" <?php if ($_SESSION['lv'] == 10) echo "hidden" ?>>
              <a href="./index.php?page=supermarket" class="sidebar-link">
                <i class="bi bi-shop"></i>
                <span>Supermarket</span>
              </a>
            </li>

            <li class="sidebar-item <?php if ($_GET['page'] == 'import') echo "active" ?>" <?php if ($_SESSION['lv'] == 100) echo "hidden" ?>>
              <a href="./index.php?page=import" class="sidebar-link">
                <i class="bi bi-file-earmark-check"></i>
                <span>Import bill</span>
              </a>
            </li>

            <li class="sidebar-item <?php if ($_GET['page'] == 'export') echo "active" ?>" <?php if ($_SESSION['lv'] == 100) echo "hidden" ?>>
              <a href="./index.php?page=export" class="sidebar-link">
                <i class="bi bi-file-earmark-excel"></i>
                <span>Export bill</span>
              </a>
            </li>


            <!-- <li class="sidebar-item <?php if ($_GET['page'] == 'requestmanage') echo "active" ?>" <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'officer') echo "hidden" ?>>
              <a href="./index.php?page=requestmanage" class="sidebar-link">
                <i class="fa-solid fa-scroll"></i>
                <span>Requests Management</span>
              </a>
            </li>

            <li class="sidebar-item <?php if ($_GET['page'] == 'announce') echo "active" ?>" <?php if ($_SESSION['role'] == 'admin') echo "hidden" ?>>
              <a href="./index.php?page=announce" class="sidebar-link">
                <i class="bi bi-megaphone-fill"></i>
                <span>Announcement</span>
              </a>
            </li> -->

          </ul>
        </div>
      </div>
    </div>
    <div id="main" class="layout-navbar navbar-fixed">
      <header class="mb-3">
        <nav class="navbar navbar-expand navbar-light navbar-top">
          <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
              <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item dropdown me-3">
                  <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    <i class="bi bi-bell bi-sub fs-4"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end notification-dropdown border border-dark" aria-labelledby="dropdownMenuButton">
                    <li class="dropdown-header">
                      <h6>Notifications</h6>
                    </li>
                    <div style="height: 300px;overflow-y: scroll;">
                    </div>
                    <li>
                      <p class="text-center py-2 mb-0">
                        <a href="./index.php?page=announce">See all notification</a>
                      </p>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="user-menu d-flex">
                    <div class="user-name text-end me-3">
                      <h6 class="mb-0 text-gray-600"><?= $_SESSION['name'] ?></h6>
                      <p class="mb-0 text-sm text-gray-600"><?php if($_SESSION['lv'] == 100) echo "Manager"; else echo "Cashier"; ?></p>
                    </div>
                    <div class="user-img d-flex align-items-center">
                      <div class="avatar avatar-md">
                        <img src="assets\images\faces\2.jpg" style="object-fit: cover;" />
                      </div>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem">
                  <li>
                    <h6 class="dropdown-header">Hello, <?= $_SESSION['name'] ?>!</h6>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./index.php?page=profile&employeeID=<?= $_SESSION['employeeID'] ?>"><i class="icon-mid bi bi-person me-2"></i> My
                      Profile</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="./index.php?page=logout-processing"><i class="icon-mid bi bi-box-arrow-left me-2"></i>
                      Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <?php
      ?>
      <!-- Modal for viewing announce -->

      <?php

      ?>