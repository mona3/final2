<?php
include("connection.php");
class query 
{
	private $conn;
	private $db;
	public function __construct()
	{
    $this->db = Database::getInstance();
     
	$this->conn = $this->db->getConnection(); 
    

		 
	}
	public function creat_Account($UserName,$password ,$Email)
	{
		$sql="INSERT INTO Account (UserName,password ,Email) Values ('$UserName','$password' ,'$Email')";
            $result = mysqli_query($this->conn, $sql);
			if($result)
					echo "Account created successfully";

	}
	
	
	
	public function Log_In($myusername,$mypassword)
	{
		$sql = "SELECT Id FROM account WHERE  password = '".$mypassword."' AND   UserName = '".$myusername."'";
            $result = mysqli_query($this->conn, $sql);
			if($result)
			{
					 $row = mysqli_fetch_array($result);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
		
      if($count == 1) 
	  {
        
         $_SESSION['login_user'] = $myusername;
         $message = "You are logged in ";
		 header("location: After_Login.php");
		 echo $message;
         
      }
	  else 
	  {
          $error = "Sorry Your Login Name or Password is invalid , try again";
		 
		 echo "<script type='text/javascript'>alert('$error');</script>";
				
				

	}
}
	}
	public function View_Products()
	{
		
            $sql = "SELECT * FROM Product";
            $result = mysqli_query($this->conn, $sql);
			
			return $result;
	}
	public function View_Company()
	{
		
            $sql = "SELECT Name * FROM Company";
            $r1 = mysqli_query($this->conn, $sql);
			return $result;
	}
	public function Get_Emails($email)
	{
		
            $sql = "SELECT email FROM Account where Email='".$email."'";
            $result = mysqli_query($this->conn, $sql);
			$numResults = mysqli_num_rows($result);
            return $numResults;
	}
	public function View_Acc()
	{
		//$sql = "SELECT Id  FROM account";
        //$result = mysqli_query($this->conn, $sql);
		//return $result;
		////
		
		
		$sql = "SELECT * "  . " FROM account" . " WHERE UserName=   '".$_SESSION["username"]."'";                //'$_SESSION['username']'";
        $result = mysqli_query( $this->conn , $sql);
        $rowcount=mysqli_num_rows($result);
			
			
		
	}
	
	
	
	
}
?>