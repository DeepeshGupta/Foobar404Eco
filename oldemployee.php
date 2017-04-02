<?php 
	include 'dbConfig.php'; 
	session_start();

    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Collector</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                <a class="navbar-brand" href="home.php">Recycler</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Manage Employee <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="addemployee.php">Add Employee</a>
                            </li>
                            <li>
                                <a href="viewemployee.php">View Employeer</a>
                            </li>
                        </ul>

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
                            Past Employee Details
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>EMP_ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Date Of Joining</th>
                                        <th>Date Of Laving</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query = $db->query("SELECT * FROM pastemployeedetails");
                                        if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['emp_id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['doj']; ?></td>
                                        <td><?php echo $row['dor']; ?></td>
  
                                    </tr>
                                    <?php } } else {?>
                                    <tr><td>No Employee(s) found
                                    <?php } ?>
                                </tbody></td></tr>
                            </table>
                        </div>
                    </div>  </td></tr>
                </div>
                
                <!-- /.row -->

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

    </body>
</html>