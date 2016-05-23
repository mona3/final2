<?php 
include("Controller.php");
$controller=new controller();
session_start();
?>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    



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
                    <?php   $Username = $controller->get_UserName();
				 if($Username==Null)
				 {    ?>
					<li>
                        <a href="Login.php">Login</a>
                    </li>
				 <?php } else { ?>
                    <li>
                        <a href="view account.php"> <?php echo $Username;?></a>
                    </li>
					<li>
                        <a href="Login.php">Logout</a>
                    </li>
				 <?php } ?>
                    <li>
                        <a href="Offers.php">Offers</a>
                    </li>
                    
					<li>
                        <a href="Order.php">My Cart</a>
                        </li>
                       
    </div>
          

 
                </ul>
            </div>


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
       
            <div class="col-md-3">
           <li>   <a>  <p class="lead">plumbing Companies</p></li></a>
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
             

                    <br />
                  <a>  <p class="lead">plumbing Galaries</p></a>
                    <div class="slide-image">
                        <a href="Gallery" class="list-group-item">Galary 1</a>
                        <a href="#" class="list-group-item">Galary 2</a>
                        <a href="#" class="list-group-item">Galary 3</a>
                    </div>
                </div>
            </div>


           

<?php
   $result=$controller->Get_Product_info2();
     if (mysqli_num_rows($result)> 0) 
     {
    // output data of each row
    while($row= mysqli_fetch_assoc($result))

         {?>
            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <!--  <img src="http://placehold.it/320x150" alt="">-->
                                 <div  style="height: 250px">
								   <?php  echo '<img src="upload/'.$row["img"].'.jpg"  style="width: 100%;max-height: 100%" height="200"/>';?>
								  </div>  
                                    <div class="caption">
                                        <h4 class="pull-right"><?php echo "$" .$row["Price"]; ?></h4>
										<h4> <a href="Product_1.php?content=<?php echo $row["Name"];?>"><?php echo $row["Name"];?></a></h4>
                                  
										<p><?php echo "Quantity:  ".$row["Num"]; ?></p>
										<p><?php echo "Type:  ".$row["P_Type"]; ?></p>
										<p><?php echo "Country:  ".$row["Country"];?></p>
										
                                    </div>
									
					
                                    <div class="ratings">
                                        <p class="pull-right">12 reviews</p>
                                        <p>
                                        <?php  $r=round($row["Rate"]); 
						$i=5;
						
						while($r>0 and(( $r<5)or ($r==5)))
						{
						?>
						 <span class="glyphicon glyphicon-star"></span>
						<?php
						$r=$r-1;
						$i=$i-1;
						}
						while($i>0)
						{
						?>
						<span class="glyphicon glyphicon-star-empty"></span>
						<?php
						$i=$i-1;
						}
						
						?>
               
                                        </p>
                                    </div>
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
