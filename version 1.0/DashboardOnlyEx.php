<?php include("dbconn.php");?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="StaffDashboard.php">SAMS</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $r['lecturer_ID']; ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="StaffInformation.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
            
                    <li class="divider"></li>
                    <li><a href="logout.php">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="StaffDashboard.php" class="active"><i class="fa fa-align-justify fa-fw"></i> About System</a>
                    </li>
                    <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Profile<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="StaffInformation.php">My Profile</a>
                                    </li>
                                    <li>
                                        <a href="StaffUpdate.php">Update Profile</a>
                                    </li>                                    
                                </ul>
                                <!-- /.nav-second-level -->
                    </li>
                    <li>                        
                            <a href="#"><i class="fa fa-table fa-fw"></i>Attendance<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="StaffUpload_attendance.php">Upload Attendance</a>
                                </li>
                                <li>
                                    <a href="StaffUpdate_attendance.php">Update Attendance</a>
                                </li>                                
                                <li>
                                    <a href="StaffRemove_attendance.php">Remove Attendance</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href="StaffAbsentee.php"><i class="fa fa-envelope fa-fw"></i>Absentee</a>                                       
                    </li>
                </ul>

            </div>
        </div>
    </nav>
