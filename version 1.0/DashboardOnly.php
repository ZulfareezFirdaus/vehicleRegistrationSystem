<?php include("dbconn.php");?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="Dashboard.php"><i class="fa fa-home"></i> SMK Telok Gadong</a>
        </div>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li>
                        <?php 
                            date_default_timezone_set("Asia/Kuala_Lumpur");
                            $autoDateTime = date('d/m/Y H:i:A');
                            $dateOnly = date('d/m/Y');
                            $timeOnly = date('H:i:A');
                        ?>
                        <label style="color:white"><i class="fa fa-calendar fa-fw"></i> <?php echo $dateOnly;?></label>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['staff_ID']; ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="signup.php"><i class="fa fa-gear fa-fw"></i> Add New User</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="Dashboard.php" class=""><i class="fa fa-pie-chart fa-fw"></i> Laman Utama</a>
                    </li>
<li>
                        <a href="#"><i class="fa fa-clipboard fa-fw"></i> Pendaftaran <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
								
                            	<li>
                                    <a href="fir2.php"><i class="fa fa-plus-square-o fa-fww"></i> Kenderaan Pelajar</a>
                                </li>
                                <li>
                                    <a href="fig2.php"><i class="fa fa-plus-square-o fa-fww"></i> Kenderaan Guru</a>
                                </li>
								
						
								
                                
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-book fa-fw"></i> Rekod <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="rfir.php"><i class="fa fa-list fa-fww"></i> Senarai Kenderaan Pelajar</a>
                            </li>
                            <li>
                                <a href="rfig.php"><i class="fa fa-list fa-fww"></i> Senarai Kenderaan Guru</a>
                            </li>   

                        </ul>
  	</li>
                             <li>
                        <a href="#"><i class="fa fa-bar-chart"></i> Laporan <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-intersex"></i> Jantina<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="cal5.php"><i class="fa fa-bookmark"></i> Tingkatan</a>
                            </li>   
                            <li>
                                <a href="cal4.php"><i class="fa fa-bookmark"></i> Kelas</a>
                            </li>   
                            <li>
                                <a href="cal6.php"><i class="fa fa-bookmark"></i> Lesen</a>
                            </li>   

                        </ul>
          <li>
                                <a href="#"><i class="fa fa-file"></i> Tingkatan<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="cal7.php"><i class="fa fa-bookmark"></i> Jantina</a>
                            </li>   
                            <li>
                                <a href="cal9.php"><i class="fa fa-bookmark"></i> Kelas</a>
                            </li>   
                            <li>
                                <a href="cal8.php"><i class="fa fa-bookmark"></i> Lesen</a>
                            </li>   

                        </ul>
  	</li>
</ul>
  	</li>

                       
  <li>
                        <a href="TrackTrace.php" class=""><i class="fa fa-search "></i> Track & Trace</a>
                    </li>



            </div>
        </div>
    </nav>