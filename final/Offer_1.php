<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">



    <style>
        body {
            background: url('36.jpg') no-repeat top;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
            color: red;
            background-attachment: scroll;
            background-position: top;
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

	
	
	
	

<?php 
$row=$controller->View_S_Offer();
?>

            <div class="col-md-8">

                <div class="thumbnail">
                   <div  style="height: 300px">
				   <?php // echo '<img class="img-responsive" src="upload/'.$row['img'].'.jpg"  style="width: 100%;max-height: 100%" alt="" height="200" alt="" />'?>
				   </div>
				 
                    <div class="caption-full">
                        <h4 class="pull-right"><?php echo "$".$row['Price_After'];?></h4>
                        <h4> <?php echo $row['Name'];?></a></h4>
						
							<p><?php echo "Precentage:  ".$row["Precentage"]; ?></p>
							<p><?php echo "Start_date:  ".$row["Start_date"];?></p>
							<p><?php echo "End_date:  ".$row["End_date"];?></p>

                        </div>

                    
                </div>

				<p><font size="5" color="red"><?php echo "Description: ";?></font></p>
				<p><font size="3" color="white"><?php echo $row["Description"];?></font></p>

    <!-- /.container -->

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
