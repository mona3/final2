<?php

session_start();
include("Controller.php");
$controller=new controller();
//$Username = $controller->get_UserName();

	
?>
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
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


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
 
 

<style>




div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #FD4;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: FE7;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
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

    <!-- Page Content -->
      <!-- Page Content -->
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

                </div>
            </div>


			
			
<!------------------------------------------------------------------------------>



<?php 
$row=$controller->View_s_Product();

$controller->Add_to_cart();
//$controller->Add($res1);
?>

            <div class="col-md-8">

                <div class="thumbnail">
                   <div  style="height: 300px">
				   <?php  echo '<img class="img-responsive" src="upload/'.$row['img'].'.jpg"  style="width: 100%;max-height: 100%" alt="" height="200" alt="" />'?>
				   </div>
				 
                    <div class="caption-full">
                        <h4 class="pull-right"><?php echo "$".$row['Price'];?></h4>
                        <h4><a href="#"> <?php echo $row['Name'];?></a>
						
						</br>
						
                        </h4>
						
					    <p><?php echo "quantity:  ".$row['Num'];?></p>
					    <p><?php echo "Type:  ".$row['P_Type'];?></p>
						<p><?php echo "Country:  ".$row['Country'];?></p>
							  <p><font size="5" color="red"><?php echo "Description: ";?></font></p>
				<p><font size="3" color="black"><?php echo $row["Description"];?></font></p>
                <div class="cont">
  <div class="stars">
    <form action="">
      <input class="star star-5" id="star-5-2" type="radio" name="star"/>
      <label class="star star-5" for="star-5-2"></label>
      <input class="star star-3" id="star-3-2" type="radio" name="star"/>
      <label class="star star-3" for="star-3-2"></label>
      <input class="star star-2" id="star-2-2" type="radio" name="star"/>
      <label class="star star-2" for="star-2-2"></label>
      <input class="star star-1" id="star-1-2" type="radio" name="star"/>
      <label class="star star-1" for="star-1-2"></label>
	  
    </form>
	
  </div>
  <h3 class="pull-right">
  <form action ="" method = "post">
  <button name="action1" type="submit" value="Add" class="btn btn-primary">Add To Cart</button>
  </form>
  </h3>
</div>

                    </div>
            </div>

                

			
				<div class="well">
                        <h4>Leave a Comment:</h4>
                        <form role="form">
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->




    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php 

//$controller->Add_to_cart();

?>
