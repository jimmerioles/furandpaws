<!-- navbar top -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
    <!-- navbar-header -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/admin/') }}">
            <h3 style="color:#fff">FP Admin Panel</h3>
        </a>
    </div>
    <!-- end navbar-header -->
    <!-- navbar-top-links -->
    <ul class="nav navbar-top-links navbar-right">
        <!-- main dropdown -->

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="top-label label label-danger">3</span>  <i class="fa fa-bell fa-3x"></i>
            </a>
            <!-- dropdown alerts-->
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i>New Subscriber
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>

                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i>New Task
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i>Server Rebooted
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- end dropdown-alerts -->
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-3x"></i>
            </a>
            <!-- dropdown user-->
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{ url('admin/manageProfile') }}"><i class="fa fa-user fa-fw"></i>User Profile</a>
                </li>
                <li><a href="{{ url('admin/manageProfile') }}"><i class="fa fa-gear fa-fw"></i>Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{ url('/admin/login') }}"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                </li>
            </ul>
            <!-- end dropdown-user -->
        </li>
        <!-- end main dropdown -->
    </ul>
    <!-- end navbar-top-links -->

</nav>
<!-- end navbar top -->
