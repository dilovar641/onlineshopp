<?php
include_once __DIR__ ."/../../common/src/Service/SecurityService.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Projects</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php if(SecurityService::isauthorized()) :?>  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
	
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="http://shop/backend/index.php?model=product&action=read" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=product&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=product&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Products</p>
                </a>
              </li>
              
            </ul>
			 <li class="nav-item">
            <a href="http://shop/backend/index.php?model=category&action=read" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=category&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=category&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Categories</p>
                </a>
              </li>
			  </ul>
			  </li>
			  <li class="nav-item">
            <a href="http://shop/backend/index.php?model=shop&action=read" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Shops
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=shop&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Shops</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=shop&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Shops</p>
                </a>
              </li>
			  </ul>
			  </li>
			  <li class="nav-item">
            <a href="http://shop/backend/index.php?model=news&action=read" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=news&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=news&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List News</p>
                </a>
              </li>
              
            </ul>
          </li>
		    <li class="nav-item">
            <a href="http://shop/backend/index.php?model=order&action=read" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=order&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://shop/backend/index.php?model=order&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Orders</p>
                </a>
              </li>
          </ul>
          </li>
	   </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
	
    <!-- /.sidebar -->
  </aside>
  <?php endif;?>