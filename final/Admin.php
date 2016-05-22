<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	    <style>
        body {
            background: url('36.jpg') no-repeat top;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
            color :red;
            background-attachment:scroll;
            background-position:top;

        }
    </style>


 
</head>

<body>
<?php
include("Controller.php");
$controller=new controller();

session_start();
?>

    <div  class="pull-left" >
	

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
				
                <a class="navbar-brand" href="Admin2.php">SB Admin</a>
            </div>
			
			
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav" >
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="page-wrapper">
			<div class="container-fluid">

			
			

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Adding	- Editing - Deletion				<!-- <small>Statistics Overview</small>-->
                        </h1>
<!--                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Adding
                            </li>
                        </ol>-->
                    </div>
                </div>
                <!-- /.row -->

<!--                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

				
				
				
				
				<!--Add Offer -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                       <img class="col" src="11.jpg" alt="">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div><a href="Add_Offers.php">New Offer</a></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					
					
					<!--Add Company-->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div><a href="Add_Company.php">New Company</a></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					
					
					<!--Add Product-->
                    <div class="col-lg-3 col-md-6" >
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                       <div> <a href="Add_Product.php">New Product</a> </div>
                                    </div>
                                </div>
                            </div>
                      
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>                                                                 
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>                                             
                    </div>


                    
<!--  Offer-->			

					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
										<img class="col" src="11.jpg" alt="">

									
                                    </div>
                        <div class="col-xs-9 text-right">
                            <div>
							 <div class="col-xs-13 text-right">
                                        <div class="h2">Offer</div>
										</div>
                   

                           <form action="" method="post">
						   <div class="col-xs-3 text-left">
                            <select name="Offer" class="pull-right" >
                                <optgroup label="Offer" >
                                   
<?php    
$controller->Delete_Offer();                              
   $result=$controller->View_Offer();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
         while($row = mysqli_fetch_assoc($result))
  
    
         {?>
          <option >  <?php echo  $row["Name"]; ?> </option>
   <?php						
         }
     } 

    else 
    {
      echo "0 results";
    }
	
 ?>               
						</optgroup>
                            </select>
							</div>
                        </div >
						   <button name="action3" dir="rtl"  type="submit" class="btn btn-primary" value="Delete Offer">Delete </button>
						   <button name="action3"   dir="rtl" type="submit" class="btn btn-primary"value="Edit Offer" >Edit </button>
                           </form >
                                       
                                    </div>
                                                                              
                        </div>
                    </div>
					</div>
					</div>


					
					
<!--  Company-->					

     
					
					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                      <i class="fa fa-tasks fa-5x"></i>
                                        
                                    </div>
                        <div class="col-xs-9 text-right">
                            <div>
							 <div class="col-xs-13 text-right">
                                        <div class="h2">Company</div>
										</div>
                           <form action="" method="post" >
						   <div class="col-xs-3 text-right">
                            <select name="company" class="pull-right">
                                <optgroup label="Company">

                                   
<?php 
		$controller->Delete_Company();
   $result=$controller->View_Company();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
         while($row = mysqli_fetch_assoc($result))
  
    
         {?>
          <option >  <?php echo  $row["Name"]; ?> </option>
   <?php						
         }
     } 

    else 
    {
      echo "0 results";
    }



 ?>      

 
							   </optgroup>
                            </select>
							</div>
                        </div>
						   <button name="action2" dir="rtl" type="submit" class="btn btn-primary" value="Delete Company" >Delete </button>
						   <button name="action2"   dir="rtl" type="submit" class="btn btn-primary"value="Edit Company" >Edit </button>
                           </form >
                                       
                                    </div>
                                                      
                                                   
                        </div>
                    </div>
					</div>
					</div>
					
					
                 <!--Product-->      
                        <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>                                        
                                    </div>
                                    
                       <div class="col-xs-9 text-right">
                            <div>
							 <div class="col-xs-13 text-right">
                                        <div class="h2">Product</div>
										</div>
	
                           <form action="" method="post">
						   <div class="col-xs-3 text-right">
                       
                            <select name="Product" class="pull-right">
                                <optgroup label="Product">
                                   
<?php    
	$controller->Delete_Product();                           
   $result=$controller->Get_Product_Names();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
         while($row = mysqli_fetch_assoc($result))
  
    
         {?>
          <option >  <?php echo  $row["Name"]; ?> </option>
   <?php						
         }
     } 

    else 
    {
      echo "0 results";
    }
	
    $controller->Get_Product_Id();
	$controller->Get_Company_Name();
	$controller->Get_Offer_Name();

 ?>               
						   </optgroup>
                           </select>

                           </div>
						   <button  name="action" dir="rtl" type="submit" class="btn btn-primary" value="Delete Product" >Delete </button>
   	                     <button   name="action" dir="rtl" type="submit" class="btn btn-primary" value="Edit Product"  >Edit </button>
                         
				   
						   
						   </form >
                                       
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                  
                            </div>
                            
                        </div>
                    </div>
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
