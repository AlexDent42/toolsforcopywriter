
<!DOCTYPE html>


<html lang="en">
  <head>
	    <base href="./../">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	    <meta name="description" content="Backstrap - Open Source Bootstrap 4 Admin Template on top of CoreUI">
	    <meta name="author" content="Alex Dent">
	    <meta name="keyword" content="Tools for copywriter">
	    <title>Dashboard</title>
	    <!-- Icons-->
	    <link href="/css/dashboard/coreui-icons.min.css" rel="stylesheet">
	    <link href="/css/dashboard/flag-icon.min.css" rel="stylesheet">
	    <link href="/css/dashboard/font-awesome.min.css" rel="stylesheet">
	    <link href="/css/dashboard/simple-line-icons.css" rel="stylesheet">
	    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
	    <!-- Main styles for this application-->
      <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
	    <link href="/css/dashboard/style.css" rel="stylesheet">
	    <link href="https://backstrap.net/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app aside-menu-fixed sidebar-lg-show">
    <header class="app-header bg-light border-0 navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="#"><b>Admin</b><span>panel</span></a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show"><span class="navbar-toggler-icon"></span></button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3"><a class="nav-link" href="{{ route('admin') }}">Dashboard</a></li>
        <li class="nav-item px-3"><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>
        <li class="nav-item px-3"><a class="nav-link" href="{{ route('comments.index') }}">Comments</a></li>
         <li class="nav-item px-3"><a class="nav-link" href="{{ route('tools.index') }}">Tools</a></li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        {{-- <li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a></li>
        <li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="icon-list"></i></a></li>
        <li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="icon-location-pin"></i></a></li>
        <li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com"></a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center"><strong>Account</strong></div><a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a><a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a><a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a><a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
            <div class="dropdown-header text-center"><strong>Settings</strong></div><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a><a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a><a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a><a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a><a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
          </div>
        </li> --}}
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show"><span class="navbar-toggler-icon"></span></button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none mr-3" type="button" data-toggle="aside-menu-show"><span class="navbar-toggler-icon"></span></button>
    </header>
    <div class="app-body">
      <div class="sidebar sidebar-pills bg-transparent">
        <nav class="sidebar-nav">
          <ul class="nav">
           
            <li class="nav-title">Overview</li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}"><i class="nav-icon la la-lg la-bullseye"></i> Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}"><i class="nav-icon la la-group la-lg mt-4"></i> Users</a></li>
             <li class="nav-item"><a class="nav-link" href="{{ route('comments.index') }}"><i class="nav-icon la la-bullhorn la-lg"></i> Comments</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('tools.index') }}"><i class="nav-icon la la-lg la-pencil"></i> Tools</a></li>
           
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item"><a href="#">{{ url()->current() }}</a></li> --}}
         {{--  <li class="breadcrumb-item active">Dashboard</li> --}}
          
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
        {{-- MAIN ADMIN CONTENT --}}
        
           @yield('admin-content')



          </div>
        </div>
      </main>
      <aside class="aside-menu">
       {{--  <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a></li>
        </ul> --}}
        <!-- Tab panes-->
       {{--  <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
              <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                <div class="avatar float-right"><img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com"></div>
                <div>Meeting with<strong>Lucas</strong></div><small class="text-muted mr-3"><i class="icon-calendar"></i>  1 - 3pm</small><small class="text-muted"><i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-info">
                <div class="avatar float-right"><img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com"></div>
                <div>Skype with<strong>Megan</strong></div><small class="text-muted mr-3"><i class="icon-calendar"></i>  4 - 5pm</small><small class="text-muted"><i class="icon-social-skype"></i>  On-line</small>
              </div>
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
              <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                <div>New UI Project -<strong>deadline</strong></div><small class="text-muted mr-3"><i class="icon-calendar"></i>  10 - 11pm</small><small class="text-muted"><i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com"></div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                <div><strong>#10 Startups.Garden</strong> Meetup</div><small class="text-muted mr-3"><i class="icon-calendar"></i>  1 - 3pm</small><small class="text-muted"><i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                <div><strong>Team meeting</strong></div><small class="text-muted mr-3"><i class="icon-calendar"></i>  4 - 6pm</small><small class="text-muted"><i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com"></div>
                  <div class="avatar avatar-xs"><img class="img-avatar" src="img/avatars/8.jpg" alt="admin@bootstrapmaster.com"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane p-3" id="messages" role="tabpanel">
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar"><img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com"><span class="avatar-status badge-success"></span></div>
              </div>
              <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar"><img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com"><span class="avatar-status badge-success"></span></div>
              </div>
              <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar"><img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com"><span class="avatar-status badge-success"></span></div>
              </div>
              <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar"><img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com"><span class="avatar-status badge-success"></span></div>
              </div>
              <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar"><img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com"><span class="avatar-status badge-success"></span></div>
              </div>
              <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
          </div>
          <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="aside-options">
              <div class="clearfix mt-4"><small><b>Option 1</b></small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked=""><span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3"><small><b>Option 2</b></small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox"><span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3"><small><b>Option 3</b></small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox"><span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3"><small><b>Option 4</b></small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked=""><span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small></div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small></div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">11444GB/16384MB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small></div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">243GB/256GB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small></div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">25GB/256GB</small>
          </div>
        </div> --}}
      </aside>
    </div>
    <footer class="app-footer">
      <div><a href="#">Tools for copywriters</a><span>&nbsp;&copy; 2021 Alex Kirpichonak</span></div>
      <div class="ml-auto"><span>Powered by </span><a href="#">@alexdent42</a><span>&nbsp;&&nbsp;</span><a href="#">Backpack for Laravel</a></div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="https://use.fontawesome.com/d4d6340577.js"></script>
    <script src="https://backstrap.net/vendors/jquery/js/jquery.min.js"></script>
    <script src="https://backstrap.net/vendors/popper.js/js/popper.min.js"></script>
    <script src="https://backstrap.net/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://backstrap.net/vendors/pace-progress/js/pace.min.js"></script>
    <script src="https://backstrap.net/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="https://backstrap.net/vendors/@coreui/coreui/js/coreui.min.js"></script>
    <script src="https://backstrap.net/vendors/pnotify/js/Pnotify.js"></script>
    <script src="https://backstrap.net/vendors/pnotify/js/PnotifyButtons.js"></script>
    <script src="https://backstrap.net/vendors/pnotify/js/PnotifyConfirm.js"></script>
    <script src="https://backstrap.net/vendors/pnotify/js/PnotifyMobile.js"></script>
    <script src="https://backstrap.net/vendors/pnotify/js/PnotifyNonBlock.js"></script>
    <script>
      PNotify.defaults.styling = 'bootstrap4';
    </script>
  </body>
</html>