<?php
 

 session_start();
 
  
?>


	<?php
include("Controller.php");
$controller=new controller();
list($var1, $var2,$var3, $var4) = $controller->View_Acc();
$Username = $controller->get_UserName();
//echo $var1; echo $var2;

?>
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
					<li>
                        <a href="Order.php">My Cart</a>
                    </li>
				 <?php } ?>
                    <li>
                        <a href="Offers.html">Offers</a>
                    </li>
                    
                	


                </ul>
            </div>


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>















<style>
        body {
            background: url('36.jpg') no-repeat top;
            background-size: cover;
	        font-family: 'Open Sans', sans-serif;
	        background-attachment: fixed;
            background-position: center;

        }
    </style>
      <form method="post" action="updateaccount.php">
       <TABLE  style=" width:30%; height:60%; Color: white" align="center" BORDER="5" >
		
  <TR>
    <TD> username</TD>
    <TD>
	 <?php echo $var1;?> 
  
    </TD>
	</TR>
	<TR>
    <TD> Password</TD>
    <TD>  
	<?php echo $var2;?> 
	</TD>
	
  </TR>
   <TR>
    <TD> Email</TD>
    <TD> 
	<?php echo $var3;?> 
	</TD>
	
  </TR>
   <TR>
    
	</TD>
	
  </TR>
	</TABLE>
        <input    style="width: 130px; height: 50px;margin-top:1.5cm; margin-left:17cm; "  type="submit" name="submit"  value="Update">
    </form>