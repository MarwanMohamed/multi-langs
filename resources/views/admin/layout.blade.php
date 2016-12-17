<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@if(isset($title)) {{$title}} @else() Admin @endif()</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('dashboard/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dashboard/css/skins/_all-skins.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/iCheck/flat/blue.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/morris/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/datepicker/datepicker3.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="/admin" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{ asset('dashboard/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <!-- end message -->
                <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('dashboard/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                </a>
            </li>
            <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="{{ asset('dashboard/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <h4>
                    Developers
                    <small><i class="fa fa-clock-o"></i> Today</small>
                </h4>
                <p>Why not buy a new awesome theme?</p>
            </a>
        </li>
        <li>
            <a href="#">
              <div class="pull-left">
                <img src="{{ asset('dashboard/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <h4>
                Sales Department
                <small><i class="fa fa-clock-o"></i> Yesterday</small>
            </h4>
            <p>Why not buy a new awesome theme?</p>
        </a>
    </li>
    <li>
        <a href="#">
          <div class="pull-left">
            <img src="{{ asset('dashboard/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <h4>
            Reviewers
            <small><i class="fa fa-clock-o"></i> 2 days</small>
        </h4>
        <p>Why not buy a new awesome theme?</p>
    </a>
</li>
</ul>
</li>
<li class="footer"><a href="#">See All Messages</a></li>
</ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <i class="fa fa-bell-o"></i>
      <span class="label label-warning">10</span>
  </a>
  <ul class="dropdown-menu">
      <li class="header">You have 10 notifications</li>
      <li>
        <!-- inner menu: contains the actual data -->
        <ul class="menu">
          <li>
            <a href="#">
              <i class="fa fa-users text-aqua"></i> 5 new members joined today
          </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
          page and may cause design problems
      </a>
  </li>
  <li>
    <a href="#">
      <i class="fa fa-users text-red"></i> 5 new members joined
  </a>
</li>
<li>
    <a href="#">
      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
  </a>
</li>
<li>
    <a href="#">
      <i class="fa fa-user text-red"></i> You changed your username
  </a>
</li>
</ul>
</li>
<li class="footer"><a href="#">View all</a></li>
</ul>
</li>
<!-- Tasks: style can be found in dropdown.less -->
<li class="dropdown tasks-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <i class="fa fa-flag-o"></i>
      <span class="label label-danger">9</span>
  </a>
  <ul class="dropdown-menu">
      <li class="header">You have 9 tasks</li>
      <li>
        <!-- inner menu: contains the actual data -->
        <ul class="menu">
          <li><!-- Task item -->
            <a href="#">
              <h3>
                Design some buttons
                <small class="pull-right">20%</small>
            </h3>
            <div class="progress xs">
                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                  <span class="sr-only">20% Complete</span>
              </div>
          </div>
      </a>
  </li>
  <!-- end task item -->
  <li><!-- Task item -->
    <a href="#">
      <h3>
        Create a nice theme
        <small class="pull-right">40%</small>
    </h3>
    <div class="progress xs">
        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
          <span class="sr-only">40% Complete</span>
      </div>
  </div>
</a>
</li>
<!-- end task item -->
<li><!-- Task item -->
    <a href="#">
      <h3>
        Some task I need to do
        <small class="pull-right">60%</small>
    </h3>
    <div class="progress xs">
        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
          <span class="sr-only">60% Complete</span>
      </div>
  </div>
</a>
</li>
<!-- end task item -->
<li><!-- Task item -->
    <a href="#">
      <h3>
        Make beautiful transitions
        <small class="pull-right">80%</small>
    </h3>
    <div class="progress xs">
        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
          <span class="sr-only">80% Complete</span>
      </div>
  </div>
</a>
</li>
<!-- end task item -->
</ul>
</li>
<li class="footer">
    <a href="#">View all tasks</a>
</li>
</ul>
</li>
<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <img src="{{ asset('dashboard/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
      <span class="hidden-xs">{{ Auth::user()->first_name }}</span>
  </a>
  <ul class="dropdown-menu">
      <!-- User image -->
      <li class="user-header">
        <img src="{{ asset('dashboard/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

        <p>
          {{ Auth::user()->first_name }} - Web Developer
          <small>Member since Nov. 2012</small>
      </p>
  </li>
  <!-- Menu Body -->
  <li class="user-body">
    <div class="row">
      <div class="col-xs-4 text-center">
        <a href="#">Followers</a>
    </div>
    <div class="col-xs-4 text-center">
        <a href="#">Sales</a>
    </div>
    <div class="col-xs-4 text-center">
        <a href="#">Friends</a>
    </div>
</div>
<!-- /.row -->
</li>
<!-- Menu Footer-->
<li class="user-footer">
    <div class="pull-left">
      <a href="#" class="btn btn-default btn-flat">Profile</a>
  </div>
  <div class="pull-right">
      <a href="#" class="btn btn-default btn-flat">Sign out</a>
  </div>
</li>
</ul>
</li>
<!-- Control Sidebar Toggle Button -->
<li>
    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
</li>
</ul>
</div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dashboard/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
          <p>{{ Auth::user()->first_name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
        </button>
    </span>
</div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users"></i> <span>Users</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
      </span>
  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="{{ Url('admin/user/create') }}"><i class="fa fa-circle-o"></i>Add User</a></li>
    <li><a href="{{ Url('admin/users') }}"><i class="fa fa-circle-o"></i>Show Users</a></li>
</ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-tasks"></i>
    <span>Categories</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li><a href="{{ Url('admin/category/create') }}"><i class="fa fa-circle-o"></i>Add Category</a></li>
    <li><a href="{{ Url('admin/categories') }}"><i class="fa fa-circle-o"></i>Show Categories</a></li>
</ul>
</li>

<li class="treeview">
  <a href="#">
    <i class="fa fa-tags"></i>
    <span>Posts</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li><a href="{{ Url('admin/post/create') }}"><i class="fa fa-circle-o"></i>Add Post</a></li>
    <li><a href="{{ Url('admin/posts') }}"><i class="fa fa-circle-o"></i>Show Posts</a></li>
</ul>
</li>

</ul>
</section>
<!-- /.sidebar -->
</aside>

<div class="content-wrapper">

    @yield('content')
</div>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('dashboard/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('dashboard/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('dashboard/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('dashboard/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('dashboard/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('dashboard/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('dashboard/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dashboard/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard/js/demo.js') }}"></script>
</body>
</html>
