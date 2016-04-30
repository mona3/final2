<?php
 

 session_start();
  
?>

<?php
include("Controller.php");
$controller=new controller();
list($var1, $var2,$var3, $var4) = $controller->View_Acc();

?>    
<?php
$controller=new controller();
$controller->Update_Account();
?>  
<style>
        body {
            background: url('1.jpg') no-repeat top;
            background-size: cover;
	        font-family: 'Open Sans', sans-serif;
	        background-attachment: fixed;
            background-position: center;
			 align:center;


        }
		
		 #formbox {
            width:400px;
            margin:auto 0;
           
		display: inline-block;
         text-align: center;

        }

    </style>
	 <form method="post" action="">
	 <div id="formbox">

 <TABLE  style=" width:30%; height:40%;margin-top:1cm; align=center;" BORDER="3"   >

  <TR>
    <TD> Username</TD>
    <TD>
     <input type="text" size="40" name="name" value= <?php echo $var1;?> >                             
    </TD>
  </TR>
  <TR>
    <TD> Password</TD>
    <TD>  
	<input type="text" size="40" name="pass" value= <?php echo $var2;?> >
	</TD>
	
  </TR>
   
   <TR>
    
	
  </TR>
</TABLE>
<br>
  <input  style=" width:120px; height:30px; margin-top:1cm;margin-right:20cm;" type="submit" name="action" value="submit" >
</div>
</form>
<br>

<form action="view account.php">
     <input style="  width:200px; height:30px; margin-top:1cm;" type="submit" value="Show Updated Information">
 </form>
	