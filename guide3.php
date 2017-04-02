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
                           Guidelines for Collection and Storage of E-Waste</h1>                          
                        </div>

                        <ul>After assessing their requirement of collection of e-waste, producers may device a collection mechanism which may include take-back through dealers, collection centres or directly through authorised dismantlers/recyclers</ul>
                        <ul>For collection of e-waste producer may take help of any professional agency like Producer Responsibility Organisation (PRO)/e-waste exchange. Producer may manage a system directly for collection of e-waste by involving relevant stakeholders such as consumer, bulk consumer, informal sector, resident associations, retailers and dealers, etc.</ul>
                        <ul>Producers may also have an arrangement of collection of e-waste from individual consumers and bulk consumers as well</ul>
                        <ul>The producers may publicize their collection system which may include details of their collection points, bins and collection vans linked to collection centres, take-back system, deposit refund scheme, e-waste exchange, retailers/dealers and PRO etc. for making collection system effective and workable.</ul>
        <ul>If take - back system is being provided, then it should be accessible to any citizen located anywhere in the country and may be provided through retailers/dealers or through service centres </ul>

        <h4>The producers may provide consumer/ bulk consumer following details of take-back system:</h4>
                        <li>Link of their web site where information pertaining to take-back system is available</li>
                        <li>Toll free number to be available during working hours (10 A.M. to 6 P.M.) for consumers / bulk consumers</li>
                        <li>Phone number/mobile numbers of grievance redressal in case, toll free number is not working</li>
                        <li>Details of their dealers, retailers, collection points/bins/pick up vans linked to collection centres for depositing of e-waste by the consumer/bulk consumers if they are part of the take-back system</li>
                        <li>Details of any incentive scheme for consumers / bulk consumers for returning of e-waste</li>
                        <li>Details of authorised dismantlers/recyclers who can take-back e-waste on behalf of the producer if dismantlers/recyclers are part of take-back system</li>

                        <ul>Producers may maintain data base of consumers while selling EEE so that consumers/ bulk consumers can be approached for collection of e-waste / end of life products.</ul>
                        <ul>Every Producer, collection centre, dealer, dismantler, recycler and refurbisher may store the e-waste for a period not exceeding one hundred and eighty (180) days and shall maintain a record of collection, sale, transfer and storage of wastes and make these records available for inspection. The period of storage of one hundred and eighty (180) days may be extended by the concerned SPCBs/PCCs up to three hundred and sixty-five (365) days in case the e-waste needs to be specifically stored for research development of a process for its recycling or reuse.</ul>
                        <ul>Storage of end of life products may be done in a manner which does not lead to breakage of these products and safe to workers handling such products</ul>
                        <h4>During storage of e-waste care may be taken:</h4>


                        <li>To avoid damage to refrigerators and air-conditioner so as to prevent release of refrigerant gases such as CFC, HFS, HCFC etc. and to prevent spillage of oils (mineral or synthetic oil) and other emissions.</li>
                        <li>To avoid damage to Cathode Ray Tube</li>
                        <li>To avoid damage to fluorescent and other mercury containing lamps</li>
                        <li>To avoid damage to equipment containing asbestos or ceramic fibres to avoid release of asbestos or ceramic fibres in the environment.</li>
            <ul>After collection of fluorescent and other mercury containing lamps, it should be sent only to a recycler or to a TSDF in case no recycler is available.</ul>
            <ul>Loading, transportation, unloading and storage of E-Waste / end of life products should be
carried out in such a way that its end use such as re-use after refurbishing or recycling or
recovery is unaffected.
</ul>
        <ul>The storage area should have fire protection system in place.</ul>                      


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