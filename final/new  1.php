<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plump_market";

 session_start();
 $conn =  mysqli_connect($servername, $username, $password, $dbname);
 
$sql = "SELECT * "  . " FROM account" . " WHERE UserName=   '".$_SESSION["username"]."'";                //'$_SESSION['username']'";
$result = mysqli_query( $conn , $sql);
$rowcount=mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
	   {
		  // 	echo "<div style='text-align:center'><h1>Welcome ". $row["password"]."!</h1></div>";
	?>

             
                                    
                                   
                                       
                    
                                      username:  <?php echo $row["UserName"];?>
									  </br>
									    </br>
                                        Password <?php echo $row["password"];?>
										
                                    </br>
									    </br>
                                   
                                        Email <?php echo $row["Email"];?></br>
										</br>
									    </br>
										ID <?php echo $row["Id"];?>
										</br>
                                       
                                    

<?php						
    }
} 

else 
{
    echo "0 results";
}

 while($row = mysqli_fetch_assoc($result))


mysqli_close($conn);
?>
<?php
include("Controller.php");
$controller=new controller();
$controller->View_Acc();
?>