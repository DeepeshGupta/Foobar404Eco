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
                           Recycling Process</h1>                          
                        </div>

                        <p>


<ul>The functions of the recyclers include dismantling along with recovery operation. There shall be no restriction on degree of operations that can be permitted for recyclers provided they have requisite facilities. The following processes should be employed by recyclers:</ul>


    <li>Manual / semi- automatic / automatic dismantling operations</li>
    <li>Shredding / crushing / fine grinding/wet grinding/ enrichment operations, gravity/ magnetic/density/eddy current separation</li>
    <li>Pyro metallurgical operations - Smelting furnace</li>
    <li>Hydro metallurgical operations</li>
    <li>Electro-metallurgical operations</li>
    <li>Chemical leaching</li>
    <li>CRT/LCD/Plasma processing</li>
    <li>Toner cartridge recycling</li>
    <li>Melting, casting, moulding operations (for metals and plastics)</li>
    


<ul>A recycling facility may accept e-waste and even those electrical and electronic assemblies or components not listed in Schedule- I for recycling, provided that they do not contain any radioactive materials and same shall be declared while taking the authorisation from concerned SPCBs/PCCs;
</ul>

<ul>The recycling facilities shall comply with the requirements as specified for dismantlers in the guidelines for dismantling in section 6.0.</ul>

<ul>A recycling facility shall install adequate wastewater treatment facilities for process wastewater and air pollution control equipment (off gas treatment, wet/alkaline/packed bed scrubber and carbon filters) depending on type of operations undertaken.</ul>



<ul>De dusting equipment such as suction hood shall be installed where manual dismantling is carried out.</ul>

<ul>Fume hoods connected with bag dust collectors followed wet (chemical) scrubbers and carbon filters shall be installed for control of fugitive emissions from furnaces or reactor.</ul>

<ul>Noise control arrangement for equipment like crusher, grinder and shredder needs to be provided.</ul>

<ul>The discharges from the facility shall comply with general standards under E (P) Act, 1986 for discharge of wastewater. Discharge standard are at Annexure IV</ul>


<ul>In case of air emissions, the unit shall comply with emission norms prescribed under Air (Prevention and Control of Pollution) Act, 1981. In case of furnace, a minimum stack height of 30 meter shall be installed depending on emission rate of SO2. Emission Standards are at Annexure V.</ul>
<ul>The workers involved in recycling operations shall use proper personal protective equipment such as goggles, masks, gloves, helmet and gumboot etc.</ul>
<ul>Adequate facilities for onsite collection and storage of bag filter residues, floor cleaning dust and other hazardous material shall be provided and sent to secure landfill by obtaining membership of TSDF.</ul>
<ul>The CRT / LCD / Plasma TV should be processed only at a recycler’s facility.</ul>

    <ul>For recycling of CRT monitor and TVs care should be taken to contain release of harmful substances. The steps for processing of CRT are as below:</ul>


    <li>CRT monitors and TVs should be manually removed from plastic/ wooden casing. The CRT should be split into funnel and panel glass using different splitting technology such as Ni-Chrome hot wire cutting, Diamond wire method or Diamond saw separation in a closed chamber under low vacuum conditions (650 mm of Hg).</li>

    <li>The funnel section is then lifted off from the panel glass section and the internal metal gasket is removed for facilitating the removal of internal phosphor coating.</li>
    <li>The internal phosphor coating from the inner side of panel glass is removed by using an abrasive wire brush with suction arrangement under low pressure as given above at (i). The extracted air is cleaned through high efficiency bag-filter system and collected in appropriate labelled containers and then disposed at an authorised TSDF.</li>
    <li>Manual shredding, cutting, and segregation operations for CRTs should be carried out in low vacuum (650 mm of Hg) chambers where the dust is extracted through cyclones, bag filters, ID fan and a suitable chimney.</li>
    <li>Segregated CRTs can also be shredded in mechanical/automatic shredding machines connected with dust control systems. The mixed shredded glass is separated into leaded glass and glass cullet using electro-magnetic field or by density separation.</li>
    

    <ul>For LCD and Plasma TV a recycler should have sealed vacuum dismantling platform for dismantling of LCD / Plasma panels. The LCD / Plasma TV should be dismantled piece by piece, starting with the removal of the plastic backing shell, printed circuit boards, aluminium or steel frame, screen, PET plastics, LCD Panel and backlight. The metal frame, wire, other metallic material and plastic backing cabinet may be sent to recyclers with valid CTO. Printed Circuit Board and LCD panel may be recycled or in case recycling facility is not available then sent to respective authorised recycling facility.</ul>
    <ul>The user of the products obtained in the recycler facility should be identified and an agreement may be entered with them for selling of the products obtained in these recycling facilities. This is for tracking the product of recycling, to ascertain where the products are going.</ul>
    <ul>Recovery of resource and particularly of precious metals present in the e-waste should be given importance.</ul>
    <ul>For fluorescent and other mercury containing lamp recycling, the unit shall have at least following systems:</ul>


        <li>Mechanical feeding system.</li>
        <li>Mercury spill collection system.</li>
        <li>Lamp Crushing System, under vacuum, for separation of mercury-contaminated phosphor powder & mercury vapors from other crushed components, so as not to cause release of any pollutant, including mercury vapor.</li>
        <li>System for segregation of mercury vapour from the phosphor powder through a distillation system for separation & recovery of mercury.</li>
        <li>Air pollution control system (APCS) which shall include HEPA (High Efficiency Particulate Arrestor) filter system or activated carbon filter system or any other equivalent efficient system for separation/ removal of mercury vapor from mercury-contaminated phosphor powder’</li>
        <li>Arrangement for disposal of mercury contaminated filter pads to TSDF.</li>
        <li>On line mercury monitoring system, to have check on emission of mercury, which has to be in compliance to the consented norms.</li>

        <ul>The fluorescent and other mercury containing lamp recycling unit shall have following obligations:</ul>

        <li>The emission outlet shall comply with the norms for mercury prescribed in the consent document. The norm for mercury emission is 0.2 mg/m 3 (Normal) as prescribed under E (P) Act, 1986 for mercury emission from other category of industries.</li>
        <li>For discharge of effluent the limit for mercury as (Hg) should be less than equal to 0.01mg /liter as prescribed under E (P) Act, 1986.</li>
        <li>) The unit shall have trained / skilled manpower to handle hazardous substances such as mercury mixed phosphor in respect of treatment/recycling.</li>
        <li>The unit shall dispose all the unrecoverable wastes from the treatment site, to a TSDF</li>
        <li>The unit shall maintain record of used fluorescent and other mercury containing lamp collected & recycled, recovery of mercury and other components. It shall, also, maintain the records pertaining to the generation, storage, transport and disposal of the wastes generated in the process.</li>
        <li>The unit shall take up ambient air quality monitoring, particularly, in reference to mercury levels with a frequency of once in a month through a recognized laboratory, for third party verification.</li>
        <h3>Space requirement for Recyclers</h3>
        <ul>As a general rule a recycler of capacity of 1 Ton per day shall require a minimum of 500 square
meters area. Authorisation to recyclers may be preferred if they have minimum operational capacity
of 5 MT/day with an area of about 2500 square meter.
</ul>







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