<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">


    <!--Image which is background-->
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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home2.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->


            <!-- Header -->
                
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Sign_up.php">Sign up</a>
                    </li>
                    <li>
                        <a href="Login.php">Login</a>
                    </li>

                    <li>
                        <a href="Acc_Inf.php">About</a>
                    </li>
                    <li>
                        <a href="Offers.php">Offers</a>
                    </li>
                	<li>
                        <a href="Order.php">My Cart</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
   <div class="container">

        <div class="row">

            <div class="col-md-3">
			
			  <p class="lead">plumbing Products</p>
                <div class="list-group">
           <?php 
        $result=$controller->View_Products();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
  
    while($row = mysqli_fetch_assoc($result))

    
         {?>
         <a href="Product_1.php?content=<?php echo $row["Name"];?>" class="list-group-item"><?php echo $row["Name"]; $SESSION['img2']=$row["Name"];?></a>
							
<?php						
      }
    } 

    else 
    {
      echo "0 results";
    }
 ?>  

					
			                    <br />
                <p class="lead">plumbing Companies</p>
                <div class="list-group">
           <?php 
        $result=$controller->View_Company();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
  
    while($row = mysqli_fetch_assoc($result))

    
         {?>
         <a href="Company_1.php?content=<?php echo $row["Name"];?>" class="list-group-item"><?php echo $row["Name"]; $SESSION['img2']=$row["Name"];?></a>
							
<?php						
      }
    } 

    else 
    {
      echo "0 results";
    }
 ?>  
             


                    </div>
                </div>
            </div>


           
           


    <div class="container" >
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="rsz_6.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="rsz_5.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="rsz_15.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>


         
				<?php
    
    $result=$controller->View_Offer();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
         {		
			$row1=$controller->Get_Product_info($row["product_Id"]) ;
			 ?>

								<div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                 <div  style="height: 250px">
								   <?php  echo '<img src="upload/'.$row1["img"].'.jpg"  style="width: 100%;max-height: 100%" height="200"/>';?>
								  </div>  
                                    <div class="caption">
                                       <h4 class="pull-right"><?php echo "$" .$row["Price_After"]; ?></h4>
										<h4> <a href="Offer_1.php?content=<?php echo $row["Name"];?>"><?php echo $row["Name"];?></a></h4>                              
									
										<p><?php echo "quantity:  ".$row1["Num"]; ?></p>										
										<p><?php echo "Precentage:  ".$row["Precentage"]; ?></p>
										<p><?php echo "Type:  ".$row1["P_Type"]; ?></p>
										<p><?php echo "Country:  ".$row1["Country"];?></p>
										

										<p><?php echo "Start_date:  ".$row["Start_date"];?></p>
										<p><?php echo "End_date:  ".$row["End_date"];?></p>
												
								        

										
									<br/><br/>
										
                                    </div>
									
					
                                   <!-- <div class="ratings">
                                        <p class="pull-right">12 reviews</p>
                                        <p>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>

                                        </p>
                                    </div>-->
									
                                </div>
                            </div>
							
<?php						
      }
    } 

    else 
    {
      echo "0 results";
    }
 ?>         
</body>

</html>
