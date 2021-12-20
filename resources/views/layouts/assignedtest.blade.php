
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">COVID-19 TMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dashboard</a>
        </div>
      </div>

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Phlebotomists
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>

              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Testing
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/newtest')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>New</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/assignedtest')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Assigned</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/onthewaytest')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>On the Way for Sample Collection</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/samplecollected')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sample Collected</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/sentlab')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sent to lab <!--<small>+ Custom Area</small--></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/reportdelivered')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Report Delivered</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/alltest')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Tests</p>
                    </a>
                  </li> 
                </ul>   


                  <li class="nav-item">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                        Reports
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('/datereport')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>B/w date reports</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/search')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Search Reports</p>
                        </a>
                      </li>
                    </ul>
                  
      <!-- Sidebar Menu 
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Phlebotomists
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>-->
        </ul>
      </nav>
       <!--/.sidebar-menu -->
    </div>
<!--/.sidebar -->
 </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Assigned To Phlebotomists</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">



  
  



                <!--<a href="bwdates-report-ds.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->

              <!--<li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>-->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

            <!-- DataTales Example -->
 <div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Assigned Tests</h6>
  </div>


  
  <div class="card-body">
      <div class="table-responsive">
          <form name="assignto" method="post">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <!--<th>Sno.</th>
                      <th>Order No.</th>
                      <th>Patient Name</th>
                      <th>Mobile No.</th>
                      <th>Test Type</th>
                      <th>Time Slot</th>
                      <th>Reg. Date</th>
                      <th>Action</th>-->
                      <th>Id</th>
                      <th>Order_No</th>
                      <th>User_id</th>
                      <th>Patient_Mobile</th>
                      <th>TestType</th>
                      <th>TestTimeSlot</th>
                      <!--<th>ReportStatus</th>
                      <th>FinalReport</th>-->
                      <th>Action</th>

                  </tr>
              </thead>
<tfoot>
  <tr>
    <th>Id</th>
                      <th>Order_No</th>
                      <th>User_id</th>
                      <th>Patient_Mobile</th>
                      <th>TestType</th>
                      <th>TestTimeSlot</th>
                      <!--<th>ReportStatus</th>
                      <th>FinalReport</th>-->
                      <th>Action</th>
  </tr>
</tfoot>
<tbody>
                  @foreach ($testrecords as $Newtest)
                  <tr>
                    <td>{{$Newtest['id']}}</td>
                    <td>{{$Newtest['OrderNo']}}</td>
                    <td>{{$Newtest['user_id']}}</td>
                    <td>{{$Newtest['PatientMobile']}}</td>
                    <td>{{$Newtest['TestType']}}</td>
                    <td>{{$Newtest['TestTimeSlot']}}</td>
                   <!-- <td>{{$Newtest['ReportStatus']}}</td>
                    <td>{{$Newtest['FinalReport']}}</td>-->
                    <td>
                      <a href="{{url('/testdetails')}}" class="btn btn-primary"> VIEW DETAILS </a>
                    </td>

                  </tr>
                  
                      
                @endforeach
              
                
                      <!--<tr>
                      <th>Sno.</th>
                      <th>Order No.</th>
                      <th>Patient Name</th>
                      <th>Mobile No.</th>
                      <th>Test Type</th>
                      <th>Time Slot</th>
                      <th>Reg. Date</th>
                      <th>Action</th>-->

</tbody>

                

</table>
     </form>
</div>
</div>
</div>

</div>

    <!--box add-->
<!-- Small Box (Stat card) -->
<!--<h5 class="mb-2 mt-4">Small boxes</h5>-->
<!--<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small card -->
   <!-- <div class="small-box bg-info">
      <div class="inner">
        <h3>10</h3>

        <p>Total Tests</p>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>-->
  <!-- ./col -->
  <!--<div class="col-lg-3 col-6">
    <!-- small card -->
    <!--<div class="small-box bg-success">
      <div class="inner">
        <h3>2<sup style="font-size: 20px"></sup></h3>

        <p>Total Assigned</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>-->
  <!-- ./col -->
  <!--<div class="col-lg-3 col-6">
    <!-- small card -->
    <!--<div class="small-box bg-warning">
      <div class="inner">
        <h3>0</h3>

        <p>On the Way Sample Collection</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-plus"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <!--<div class="col-lg-3 col-6">
    <!-- small card -->
    <!--<div class="small-box bg-danger">
      <div class="inner">
        <h3>0</h3>

        <p>Sample Collected</p>
      </div>
      <div class="icon">
        <i class="fas fa-chart-pie"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>-->
  <!-- ./col -->
</div>
<!-- /.row -->

<!-- Small Box (Stat card) -->
<!--<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <!--<div class="small-box bg-inverse">
      <!-- Loading (remove the following to stop the loading)-->
      <!--<div class="inner">
        <i class="fas fa-3x fa-sync-alt"></i>
      </div>-->
      <!-- end loading -->
     <!-- <div class="inner">
        <h3>7</h3>

        <p>Registered Patients</p>
    </div>

    <div class="icon">
      <i class="fas fa-shopping-cart"></i>
    </div>
    <a href="#" class="small-box-footer">
      More info <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>
</div>-->

<!--card new-->
<div class="col-lg-3 col-6">
    <!-- small card -->
    <!--<div class="small-box bg-warning">
      <div class="inner">
        <h3>3<sup style="font-size: 20px"></sup></h3>

        <p>Report Delivered</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>-->

  <!--<div class="col-lg-3 col-6">
    <!-- small card -->
    <!--<div class="small-box bg-primary">
      <div class="inner">
        <h3>0<sup style="font-size: 20px"></sup></h3>

        <p>Sample Sent To Lab</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>-->
<!-- ./col -->
<!--<div class="col-lg-3 col-6">
  <!-- small card -->
  <div class="small-box bg-faded">
    <!-- Loading (remove the following to stop the loading)-->
    <div class="inner">
      <i class="fas fa-arrow-circle-right"></i>
    </div>-->
    <!-- end loading -->
    <!--<div class="inner">
      <h3>3<sup style="font-size: 20px"></sup></h3>

      <p>Registered Phlebotomists</p>
    </div>
    <div class="icon">
      <i class="ion ion-stats-bars"></i>
    </div>
    <a href="#" class="small-box-footer">
      More info <i class="fas fa-arrow-circle-right"></i>
    </a>-->
  </div>
</div>
<!-- ./col -->
</div>
<!-- /.row -->


    <!-- Main content 
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div> /.card -->
          <!--</div>
          <!-- /.col-md-6 -->
         <!-- <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>-->

            <!--<div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>-->
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar 
  <aside class="control-sidebar control-sidebar-dark">
    Control sidebar content goes here -->
    <!--<div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
   /.control-sidebar -->

  <!-- Main Footer 
  <footer class="main-footer">
    To the right -->
    <!--<div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
     Default to the left -->
    <!--<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
 ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
