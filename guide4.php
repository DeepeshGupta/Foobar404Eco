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
                           Guidelines for Environmentally Sound Dismantling of E-Waste</h1>                          
                        </div>

                        <ul>Any person or organisation or registered society or a designated agency or a company or an association can engage in dismantling of e-waste into their components by obtaining authorisation from the respective SPCBs/PCCs. Dismantlers may set up their collection centre, details of which shall be entered in their authorisation. These collection centres shall not require separate authorisation</ul>
                        <ul>A dismantler shall be connected to either Producers or PRO or e-waste exchange or take-back system or authorised recycler</ul>
                        <ul>A dismantler has to obtain consent to establish from SPCBs/PCCs under the Water (Prevention and Control of Pollution) Act, 1974 and the Air (Prevention and Control of Pollution) Act, 1981
                        </ul>
                        <ul>A dismantler has to obtain consent to operate from SPCBs/PCCs under the Water (Prevention and Control of Pollution) Act, 1974 and the Air (Prevention and Control of Pollution) Act, 1981</ul>
                        <ul>A dismantler has to obtain authorisation from SPCBs/PCCs under E Waste (Management) Rules, 2016, provided that any person authorised/registered under the provisions of the Hazardous Wastes (Management, Handling and Transboundary Movements) Rules, 2008, and the E-waste (Management & Handling) Rules, 2011 prior to the date of coming into force of these rules shall not be required to make an application for authorisation till the period of expiry of such authorisation/registration</ul>
                        <ul>A dismantler should have weigh bridge and other appropriate weighing equipment for weighing each delivery received by it and maintain a record in this regard.</ul>
                        <ul>The unloading of e-waste/end of life products should be carried out in such a way that there should not be any damage to health, environment and to the product itself. Unloading of Cathode Ray Tubes (CRT), LCD / LED / Plasma TV, refrigerator, air conditioners and fluorescent and other mercury containing lamps should be carried out under supervision in such a way to avoid breakage.</ul>
                        <ul>A dismantler should have facilities for destroying or permanently deleting data stored in the memory of end of life products (Hard Disk, Telephones, Mobile phones) either through hammering or through data eraser.</ul>

                        <h4>Dismantling Process</h4>


        <ul>Dismantling operation is essentially manual operation for segregating various components/ parts and sending them to respective users/ recyclers.Directly usable components can be sent only to an
authorised refurbisher. The other parts can be sent to recyclers having valid CTO / authorised e- waste recyclers depending upon the nature of the part. For example, steel or aluminium part which
contains no hazardous constituents can be sent to respective recyclers. Other parts which may contain hazardous constituents have to be sent to authorised e-waste recyclers.
</ul>
                        <ul>Dismantlers may perform the following operations

<li>De-dusting</li>
<li>Manual dismantling</li>
</ul>
                        <ul>Dismantling operation shall comprise of physical separation and segregation after opening the electrical and electronic equipment into the component by manual operations.</ul>
                        <ul>Dismantler may use screwdrivers, wrenches, pliers, wire cutters, tongs and hammers etc. For dismantling. The dismantled components should be sent to authorised e-waste recyclers or recyclers having valid consent to operate (CTO).</ul>
                        <ul>Manual dismantling operations should be carried out over the dismantling table with space de-dusting system so as to maintain desirable work zone air quality as per the factories Act as amended from time to time. The de dusting system should consist of suction hoods over dismantling table connected with a cyclone, bag filter and venting through a chimney of three-meter height above roof level.</ul>


                        <ul>Collection boxes should be placed near dismantling table for keeping the dismantled components.</ul>
                        <ul>The workers involved in dismantling operation should have appropriate equipment such as screwdrivers, wrenches, pliers, wire cutters, tongs and hammers etc. for dismantling the e-waste.</ul>
                        <ul>During dismantling operations, the workers should use proper personal protective equipment
such as goggles, masks, gloves, helmet and gumboot etc.
</ul>
                        <ul>The following dismantled items and components must be removed from end of life products and stored in a safe manner for transportation to recyclers:</ul>


                        <li>Batteries</li>
                        <li>Printed Circuit Boards (PCBs) of EEE</li>
                        <li>Plastic</li>
                        <li>External Electrical Cables</li>



                        <ul>Volume/Size reduction may be carried out after dismantling operations for the parts like steel/aluminium/plastic, for ease of transportation. Dismantled and segregated plastic from e-waste shall only be given to registered plastic recyclers having registration under Plastic Waste (Management) Rules, 2016.</ul>
                        <ul>During the volume/size reduction of dismantled steel/aluminium/plastic parts, the dismantlers
should have arrangement for dust and noise controls. These operations should be under
acoustic enclosure for noise reduction.
</ul>
                        <ul>Dismantlers shall not carry out shredding / crushing / fine grinding/wet grinding/ enrichment operations and gravity/ magnetic/density/eddy current separation of printing circuit board or the components attached with the circuit board.</ul>


                        <ul>Dismantlers shall not be permitted for chemical leaching or heating process or melting the
material
</ul>
                        <ul>In case of dismantling refrigerators and air conditioners, only skilled manpower having required tools and personal protective equipment (PPEs) must be deployed to manually separate compressors. Prior to dismantling the compressors, adequate facilities should be provided for collection of coolant/refrigerant gases and compressor oil</ul>
                        <ul>Dismantled circuit boards, capacitors, batteries, capacitors containing PCBs (Polychlorinated
biphenyls) or PCTs (Polychlorinated terphenyls) etc. shall not be stored in open.
</ul>
                        <ul>Dismantlers should have adequate facilities for managing leakage of compressor oils, coolant/refrigerant gases such as CFCs/HCFCs and mercury from end of life fluorescent and other mercury containing lamp etc. Spills involving broken Fluorescent lamps, Oils spills should first be contained to prevent spread of the material to other areas. This may involve the use of dry sand, proprietary booms / absorbent pads, stabilizing chemicals etc. for subsequent transfer to hazardous waste TSDFs.</ul>

                        <h5>The premise for dismantling operation should fulfil the following requirements:</h5>

                        <li>Water proof roofing and impermeable surfaces</li>
                        <li>Storage space for dissembled spare parts.</li>
                        <li>Separate containers for storage of batteries, capacitors containing PCBs (Polychlorinated biphenyls) or PCTs (Polychlorinated terphenyls)</li>

                        <h5>Space requirement for Dismantlers</h5>

                        <ul>A dismantler needs space for storage of electrical and electronic equipment up to 180 days, for process of dismantling and volume reduction and space for storage of dismantled and segregated material and free space for movement and office/ administration and other utilities. It is estimated that a minimum of 300 square meter area for a dismantling capacity of 1T/day is required for storage of raw material, segregated material, dismantling operations and office/ administration & other utilities.</ul>
                        

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