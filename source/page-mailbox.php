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
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
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
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="page-login.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>UI Elements</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="bootstrap-components.php"><i class="fa fa-circle-o"></i> Bootstrap Elements</a></li>
                <li><a href="http://fontawesome.io/icons/" target="_blank"><i class="fa fa-circle-o"></i> Font Icons</a></li>
                <li><a href="ui-cards.php"><i class="fa fa-circle-o"></i> Cards</a></li>
                <li><a href="widgets.php"><i class="fa fa-circle-o"></i> Widgets</a></li>
              </ul>
            </li>
            <li><a href="charts.php"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form-components.php"><i class="fa fa-circle-o"></i> Form Components</a></li>
                <li><a href="form-custom.php"><i class="fa fa-circle-o"></i> Custom Components</a></li>
                <li><a href="form-samples.php"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                <li><a href="form-notifications.php"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="table-basic.php"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                <li><a href="table-data-table.php"><i class="fa fa-circle-o"></i> Data Tables</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                <li><a href="page-login.php"><i class="fa fa-circle-o"></i> Login Page</a></li>
                <li><a href="page-lockscreen.php"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                <li><a href="page-user.php"><i class="fa fa-circle-o"></i> User Page</a></li>
                <li><a href="page-invoice.php"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                <li><a href="page-calendar.php"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                <li><a href="page-mailbox.php"><i class="fa fa-circle-o"></i> Mailbox</a></li>
                <li><a href="page-error.php"><i class="fa fa-circle-o"></i> Error Page</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-envelope-o"></i> Mailbox</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Mailbox</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"><a class="mb-20 btn btn-primary btn-block" href="">Compose Mail</a>
            <div class="card p-0">
              <h4 class="card-title folder-head">Folders</h4>
              <div class="card-body">
                <ul class="nav nav-pills nav-stacked mail-nav">
                  <li class="active"><a href="#"><i class="fa fa-inbox fa-fw"></i> Inbox<span class="label label-primary pull-right">12</span></a></li>
                  <li><a href="#"><i class="fa fa-envelope-o fa-fw"></i> Sent</a></li>
                  <li><a href="#"><i class="fa fa-file-text-o fa-fw"></i> Drafts</a></li>
                  <li><a href="#"><i class="fa fa-filter fa-fw"></i> Junk <span class="label label-warning pull-right">65</span></a></li>
                  <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Trash</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="mailbox-controls">
                <div class="animated-checkbox">
                  <label>
                    <input type="checkbox"><span class="label-text"></span>
                  </label>
                </div>
                <div class="btn-group">
                  <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-trash-o"></i></button>
                  <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-reply"></i></button>
                  <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-share"></i></button>
                  <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-refresh"></i></button>
                </div>
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td>
                        <div class="animated-checkbox">
                          <label>
                            <input type="checkbox"><span class="label-text"> </span>
                          </label>
                        </div>
                      </td>
                      <td><a href="#"><i class="fa fa-star-o"></i></a></td>
                      <td><a href="read-mail.php">John Doe</a></td>
                      <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                      <td><i class="fa fa-paperclip"></i></td>
                      <td>8 mins ago</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="animated-checkbox">
                          <label>
                            <input type="checkbox"><span class="label-text"> </span>
                          </label>
                        </div>
                      </td>
                      <td><a href="#"><i class="fa fa-star"></i></a></td>
                      <td><a href="read-mail.php">John Doe</a></td>
                      <td><b>A report on some good project</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                      <td></td>
                      <td>15 mins ago</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="animated-checkbox">
                          <label>
                            <input type="checkbox"><span class="label-text"> </span>
                          </label>
                        </div>
                      </td>
                      <td><a href="#"><i class="fa fa-star-o"></i></a></td>
                      <td><a href="read-mail.php">John Doe</a></td>
                      <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                      <td><i class="fa fa-paperclip"></i></td>
                      <td>30 mins ago</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="animated-checkbox">
                          <label>
                            <input type="checkbox"><span class="label-text"> </span>
                          </label>
                        </div>
                      </td>
                      <td><a href="#"><i class="fa fa-star"></i></a></td>
                      <td><a href="read-mail.php">John Doe</a></td>
                      <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                      <td></td>
                      <td>25 December</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="animated-checkbox">
                          <label>
                            <input type="checkbox"><span class="label-text"> </span>
                          </label>
                        </div>
                      </td>
                      <td><a href="#"><i class="fa fa-star-o"></i></a></td>
                      <td><a href="read-mail.php">John Doe</a></td>
                      <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                      <td><i class="fa fa-paperclip"></i></td>
                      <td>20 December</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="animated-checkbox">
                          <label>
                            <input type="checkbox"><span class="label-text"> </span>
                          </label>
                        </div>
                      </td>
                      <td><a href="#"><i class="fa fa-star"></i></a></td>
                      <td><a href="read-mail.php">John Doe</a></td>
                      <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                      <td></td>
                      <td>20 December</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="animated-checkbox">
                          <label>
                            <input type="checkbox"><span class="label-text"> </span>
                          </label>
                        </div>
                      </td>
                      <td><a href="#"><i class="fa fa-star"></i></a></td>
                      <td><a href="read-mail.php">John Doe</a></td>
                      <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                      <td><i class="fa fa-paperclip"></i></td>
                      <td>20 December</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="animated-checkbox">
                          <label>
                            <input type="checkbox"><span class="label-text"> </span>
                          </label>
                        </div>
                      </td>
                      <td><a href="#"><i class="fa fa-star-o"></i></a></td>
                      <td><a href="read-mail.php">John Doe</a></td>
                      <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                      <td></td>
                      <td>20 December</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-right semibold-text"><span class="text-muted mr-10">Showing 1-15 out of 60</span>
                <div class="btn-group">
                  <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-chevron-left"></i></button>
                  <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-chevron-right"></i></button>
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