        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin">BackEnd</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="disconnect"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?php echo constant('PATH'); ?>admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo constant('PATH'); ?>admin/users"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="<?php echo constant('PATH'); ?>admin/categories"><i class="fa fa-th-large fa-fw"></i> Categories</a>
                        </li>
                        <li>
                            <a href="<?php echo constant('PATH'); ?>admin/subcategories"><i class="fa fa-th-large fa-fw"></i> SubCategories</a>
                        </li>
                        <li>
                            <a href="<?php echo constant('PATH'); ?>admin/cities"><i class="fa fa-building fa-fw"></i> Cities</a>
                        </li>
                        <li>
                            <a href="<?php echo constant('PATH'); ?>admin/img"><i class="fa fa-upload fa-fw"></i> Medias</a>
                        </li>
                        <li>
                            <a href="<?php echo constant('PATH'); ?>admin/contents"><i class="fa fa-list fa-fw"></i> Contents</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>