<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">ECORECO</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li class="active">
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i>Home</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"></i> Manage Employee <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="addemployee.php">Add Employee</a>
                            </li>
                            <li>
                                <a href="viewemployee.php">View Employee</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="pendingorders.php" data-toggle="collapse" data-target="#demo"></i> Pending Orders </a>
                        
                    </li>

                    <li>
                        <a href="approveorder.php" data-toggle="collapse" data-target="#demo"></i> Approve Orders </a>
                    </li>

                    <li>
                        <a href="oldemployee.php" data-toggle="collapse" data-target="#demo"></i> Past Employee </a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"></i> Guidelines<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="guide1.php">Bulk</a>
                            </li>
                            <li>
                                <a href="guide2.php">Collection Center</a>
                            </li>

                            <li>
                                <a href="guide3.php">Collection Storage</a>
                            </li>

                            <li>
                                <a href="guide4.php">Environmental_dismental</a>
                            </li>


                            <li>
                                <a href="guide5.php">EPR</a>
                            </li>


                             <li>
                                <a href="guide6.php">Recyclier</a>
                            </li>


                             <li>
                                <a href="guide7.php">Refurnisher</a>
                            </li>


                             <li>
                                <a href="guide8.php">Refurnisher</a>
                            </li>


                            <li>
                                <a href="guide9.php">Transportation</a>
                            </li>


                        </ul>
                    </li>

        
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Guidelines for Collection Centre</h1>                          
                        </div>

                        <p>


<ul>Collection centre or collection points are part of E-waste channelisation, and can be established by producers, refurbishers, dismantlers and recyclers. Collection Centre may collect and store e-waste, on behalf of producer / dismantler / recycler /refurbisher and transfer the same to authorised dismantlers / recyclers.</ul>

<ul>Only those collection centres may operate which are specified in EPR-Authorisation of the
producers including the collection centres established by dismantlers / recyclers / refurbishers and having agreement with Producers.
</ul>

<ul>If the collection centres are operating on behalf of many producers, then all such producers should provide this information in their EPR application.</ul>

<ul>Collection centres have to collect e-waste on behalf of producers including those arising from orphaned products. Collection centres established by producers can be managed by their PRO or dismantler and recycler having agreement with producers.</ul>



<ul>The collection points/bins can be at designated places where e-waste can be collected from residential areas, office complexes, commercial complexes, retail outlets, customer care stores, educational and research institutions, resident welfare associations (RWAs). These collection points have to be part of producer’s collection and channelisation plan.</ul>

<ul>The bulk consumers should ensure that used lamps are not disposed in the municipal bin but handed over (in a properly packed form) to take back system / collection and channelisation system of producer or to a collection centre of an authorised recycler who is part of producer channelisation system.</ul>

<ul>Mobile collection vans can be used for door to door collection of e-waste from institutions/ individuals/small enterprises and such vans shall be linked to collection centres, and if provided by producers, shall be part of their EPR Plan.</ul>

<ol>Material from collection centres should be send only to the authorised dismantlers and Recyclers except in case of used Fluorescent and other mercury containing lamps, which can be sent to TSDF in case recyclers are not available.</ol>
</p>



                    </div>
                </div>
               
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>