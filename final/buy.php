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


<?php 
include("Controller.php");
$controller=new controller();

$controller->buy();
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
                <a class="navbar-brand" href="Home.html">Home</a>
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
                        <a href="#">Posts</a>
                    </li>
                    <li>
                        <a href="Offers.html">Offers</a>
                    </li>
                    <li>
                        <a href="Gallery.html">Galleries</a>
                    </li>


                </ul>
            </div>


            <!-- /.navbar-collapse -->
        </div>
        
        <!-- /.container -->
    </nav>
 <div class="container">
        <h2>Buy Product</h2>
		<form action="" method="post" enctype="multipart/form-data">
		
			<h2><input name="address" type="text" class="address" placeholder="Address" required=""></h2>
			<h2><input name="phone_num" type="text" class="Phone Number" placeholder="Phone Number" required=""></h2>
<h2>Time: <h2/>
  <input type="radio" name="gender" value="9:11 am" checked> 9:11 am<br>
  <input type="radio" name="gender" value="9:11 pm"> 9:11 pm<br>
 
<h2>Date: <h2/>
  <input type="radio" name="day" value="sunday" checked> sunday<br>
  <input type="radio" name="day" value="Monday">Monday<br>
   <input type="radio" name="day" value="Tuesday">Tuesday<br>
    <input type="radio" name="day" value="Wednesday">Wednesday<br>
     <input type="radio" name="day" value="Thursday">Thursday<br>
			<div class="clear"></div>
	
			<h2><input name="action" type="submit" value="Buy"></h2>
<head>

	<link rel="stylesheet" href="../_static/js/dojo/../dijit/themes/claro/claro.css">
	
	<script>dojoConfig = {parseOnLoad: true}</script>
	<script src='../_static/js/dojo/dojo.js'></script>
	
	<script>
require([
    "dojo/parser",
    "dijit/Calendar"
]);
	</script>
</head>
<body class="claro">
    <div data-dojo-type="dijit/Calendar">
    <script type="dojo/method" data-dojo-event="onChange" data-dojo-args="value">
        require(["dojo/dom", "dojo/date/locale"], function(dom, locale){
            dom.byId('formatted').innerHTML = locale.format(value, {formatLength: 'full', selector:'date'});
        });
    </script>
</div>
<p id="formatted"></p>
		</form>
	</div>
    <!-- Page Content -->
     
</body>

</html>
