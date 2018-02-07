<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.min.css">
    <title>American Torres</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">American Torres</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fas fa-circle fa-stack-2x text-danger"></i><i class="fas fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fas fa-circle fa-stack-2x text-success"></i><i class="fas fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.php"><i class="fas fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.php"><i class="fas fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="page-login.php"><i class="fas fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="images/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <p>John Doe</p>
              <p class="designation">Frontend Developer</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fas fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fas fa-laptop"></i><span>UI Elements</span><i class="fas fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="bootstrap-components.php"><i class="fas fa-circle-o"></i> Bootstrap Elements</a></li>
                <li><a href="http://fontawesome.io/icons/" target="_blank"><i class="fas fa-circle-o"></i> Font Icons</a></li>
                <li><a href="ui-cards.php"><i class="fas fa-circle-o"></i> Cards</a></li>
                <li><a href="widgets.php"><i class="fas fa-circle-o"></i> Widgets</a></li>
              </ul>
            </li>
            <li><a href="charts.php"><i class="fas fa-pie-chart"></i><span>Charts</span></a></li>
            <li class="treeview"><a href="#"><i class="fas fa-edit"></i><span>Forms</span><i class="fas fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form-components.php"><i class="fas fa-circle-o"></i> Form Components</a></li>
                <li><a href="form-custom.php"><i class="fas fa-circle-o"></i> Custom Components</a></li>
                <li><a href="form-samples.php"><i class="fas fa-circle-o"></i> Form Samples</a></li>
                <li><a href="form-notifications.php"><i class="fas fa-circle-o"></i> Form Notifications</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fas fa-th-list"></i><span>Tables</span><i class="fas fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="table-basic.php"><i class="fas fa-circle-o"></i> Basic Tables</a></li>
                <li><a href="table-data-table.php"><i class="fas fa-circle-o"></i> Data Tables</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fas fa-file-text"></i><span>Pages</span><i class="fas fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.php"><i class="fas fa-circle-o"></i> Blank Page</a></li>
                <li><a href="page-login.php"><i class="fas fa-circle-o"></i> Login Page</a></li>
                <li><a href="page-lockscreen.php"><i class="fas fa-circle-o"></i> Lockscreen Page</a></li>
                <li><a href="page-user.php"><i class="fas fa-circle-o"></i> User Page</a></li>
                <li><a href="page-invoice.php"><i class="fas fa-circle-o"></i> Invoice Page</a></li>
                <li><a href="page-calendar.php"><i class="fas fa-circle-o"></i> Calendar Page</a></li>
                <li><a href="page-mailbox.php"><i class="fas fa-circle-o"></i> Mailbox</a></li>
                <li><a href="page-error.php"><i class="fas fa-circle-o"></i> Error Page</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fas fa-share"></i><span>Multilevel Menu</span><i class="fas fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.php"><i class="fas fa-circle-o"></i> Level One</a></li>
                <li class="treeview"><a href="#"><i class="fas fa-circle-o"></i><span> Level One</span><i class="fas fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="blank-page.php"><i class="fas fa-circle-o"></i> Level Two</a></li>
                    <li><a href="#"><i class="fas fa-circle-o"></i><span> Level Two</span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="row user">
          <div class="col-md-12">
            <div class="profile">
              <div class="info"><img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
                <h4>John Doe</h4>
                <p>FrontEnd Developer</p>
              </div>
              <div class="cover-image"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card p-0">
              <ul class="nav nav-tabs nav-stacked user-tabs">
                <li class="active"><a href="#user-timeline" data-toggle="tab">Timeline</a></li>
                <li><a href="#user-settings" data-toggle="tab">Settings</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane active" id="user-timeline">
                <div class="timeline">
                  <div class="post">
                    <div class="post-media"><a href="#"><img src="images/user.png"></a>
                      <div class="content">
                        <h5><a href="#">John Doe</a></h5>
                        <p class="text-muted"><small>2 January at 9:30</small></p>
                      </div>
                    </div>
                    <div class="post-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <ul class="post-utility">
                      <li class="likes"><a href="#"><i class="fas fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                      <li class="shares"><a href="#"><i class="fas fa-fw fa-lg fa-share"></i>Share</a></li>
                      <li class="comments"><i class="fas fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                    </ul>
                  </div>
                  <div class="post">
                    <div class="post-media"><a href="#"><img src="images/user.png"></a>
                      <div class="content">
                        <h5><a href="#">John Doe</a></h5>
                        <p class="text-muted"><small>2 January at 9:30</small></p>
                      </div>
                    </div>
                    <div class="post-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <ul class="post-utility">
                      <li class="likes"><a href="#"><i class="fas fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                      <li class="shares"><a href="#"><i class="fas fa-fw fa-lg fa-share"></i>Share</a></li>
                      <li class="comments"><i class="fas fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="user-settings">
                <div class="card user-settings">
                  <h4 class="line-head">Settings</h4>
                  <form>
                    <div class="row mb-20">
                      <div class="col-md-4">
                        <label>First Name</label>
                        <input class="form-control" type="text">
                      </div>
                      <div class="col-md-4">
                        <label>Last Name</label>
                        <input class="form-control" type="text">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8 mb-20">
                        <label>Email</label>
                        <input class="form-control" type="text">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Mobile No</label>
                        <input class="form-control" type="text">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Office Phone</label>
                        <input class="form-control" type="text">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Home Phone</label>
                        <input class="form-control" type="text">
                      </div>
                    </div>
                    <div class="row mb-10">
                      <div class="col-md-12">
                        <button class="btn btn-primary" type="button"><i class="fas fa-fw fa-lg fa-check-circle"></i> Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>