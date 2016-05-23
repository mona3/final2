<?php
include("connection.php");
class  foo
{
	public $conn;
	public $db;
	public function __construct()
	{
        $this->db = Database::getInstance();
     
	$this->conn = $this->db->getConnection(); 
        }
}
class Account extends  foo
{
	
	public function get_UserName()
	{       $name='';
		   $sql = "SELECT UserName FROM Account WHERE Email=   '".$_SESSION["mail"]."'";
            $result = mysqli_query($this->conn, $sql);
			
			if (mysqli_num_rows($result) > 0) 
        {
			
          while($row = mysqli_fetch_assoc($result)) 
	      {
		
			$name= $row["UserName"];
           break;
		  }
		}
		 return $name;
	}
	
	
	
	
	
  
  
  public function creat_Account($UserName,$password ,$Email)
	{
		$sql="INSERT INTO Account (UserName,password ,Email) Values ('$UserName','$password' ,'$Email')";
            $result = mysqli_query($this->conn, $sql);
			if($result)
					echo "Account created successfully";
	//mysqli_close($conn);
	}
	public function Get_Emails($email)
	{
		
            $sql = "SELECT email FROM Account where Email='".$email."'";
            $result = mysqli_query($this->conn, $sql);
			$numResults = mysqli_num_rows($result);
		
		
            return $numResults;
	}
	
	public function Log_In($mymail,$mypassword)
	{
		  $sql = "SELECT Id FROM account WHERE  password = '".$mypassword."' AND   Email = '".$mymail."'";
            $result = mysqli_query($this->conn, $sql);
			if($result)
			{
				
		$row = mysqli_fetch_array($result);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
		
      if($count == 1) 
	  {
		 
        
         $_SESSION['login_user'] = $mymail;
         $message = "You are logged in ";
		 if($mymail=="Admin")
		   header("location: Admin2.php");
	   else
		 header("location: home2.php");
		 echo $message;
         
      }
	  else 
	  {
          $error = "Sorry Your Login Name or Password is invalid , try again";
		 
		 echo "<script type='text/javascript'>alert('$error');</script>";
				
				

	}
}
	
	
  
}

public function Get_Id($name)
	{
		    
            $sql ="SELECT Id FROM Account WHERE UserName='".$name."'";
            $result = mysqli_query($this->conn,$sql);
			$row=mysqli_fetch_assoc($result);
	        return $row["Id"];

	}




public function View_Acc()
	{
		
         
		//echo $_SESSION["mail"];
		$name=''; $id=''; $mail=''; $pass='';
		$sql = "SELECT * "  . " FROM account" . "   WHERE Email = '".$_SESSION["mail"]."'";               //'$_SESSION['username']'";
	
        $result = mysqli_query( $this->conn , $sql);
        $rowcount=mysqli_num_rows($result);
		////////////////////////////////
	
        if (mysqli_num_rows($result) > 0) 
        {
		
				
          while($row = mysqli_fetch_assoc($result)) 
	      {
		
			$name= $row["UserName"];
			//echo $name;
			$id=$row["Id"];	
			$mail=$row["Email"];
             //echo $mail;			
			$pass=$row["password"];	
		
			
			
	      }
		}
	    
		 
		 return array($name, $pass ,$mail,$id); 
		 
		 
	}
	public function Update_Acc()
	{
		$myusername=''; $email=''; $password='';
		if(isset($_POST['action']))
      {    
      
        if($_POST['action']=="submit")
        {
		 
	     $myusername= $_POST["name"];
		
         //$email= $_POST["mail"];
		  //echo  $email;
         $password=$_POST["pass"]; 
		  //echo  $password;
		 //$id = $_POST["id"];
		}
		
	  }
	  
	  //$_SESSION['username']= $username;

		$sql = "UPDATE account 
        SET    UserName='$myusername' ,     password =  '$password' 
        WHERE Email=   '".$_SESSION["mail"]."'";
        mysqli_query($this->conn, $sql);
		$result = mysqli_query($this->conn, $sql);
		?>
		
 
	<?php
	}	











}
class Product extends  foo
{
	/*public function Get_PName()
	{
		
		
		$content= isset($_GET['content'])?$_GET['content']:'';
		$this->Order->Get_Product_info2($content);
		$result=$this->Product->Get_Product_info2($content);
       $row = mysqli_fetch_assoc($result);
	   echo $content;
	   return $row;
	   
	}*/
public function set_rate($name,$rate)
	{
	$sql ="UPDATE Product SET Rate ='$rate' where Name='".$name."'";
        $result = mysqli_query($this->conn,$sql);
	return $result;
	}	
public function  search($name)
 {
   
 
$sql = "SELECT * FROM Product WHERE Name LIKE '%".$name."%'"; 

		$result = mysqli_query($this->conn, $sql);
		/* while($row=mysqli_fetch_assoc($result))
		{
			echo $row["Name"];
		} */
		return $result ;
  
}  
 
 
 

	
	
	
	
  public function View_Products()
	{
		
            $sql = "SELECT * FROM Product";
            $result = mysqli_query($this->conn, $sql);
            //mysqli_close($conn);
			return $result;
	}
  
  public function Add_Product($Name ,$Description ,$Price,$Num ,$Rate , $P_Type,$Country,$Company_Id,$img )
	{
		    
            $sql = "INSERT INTO Product (Name ,Description ,Price,Num ,Rate , P_Type,Country,Company_Id,img  ) Values ('$Name' ,'$Description' ,'$Price','$Num','$Rate' , '$P_Type','$Country','$Company_Id','$img' )";
            $result = mysqli_query($this->conn, $sql);
		   
			 return $result;
	}
	public function Get_Product_Names()
	{
		
            $sql ="SELECT Name FROM Product";
            $result = mysqli_query($this->conn,$sql);
			return $result;
	}
	
	public function Delete_Product($name)
	{
		
            $sql ="delete FROM Product where Name='".$name."'";
            $result = mysqli_query($this->conn,$sql);
			return $result;
	}
	
	public function Edit_Product($Name ,$Description ,$Price,$Num  , $P_Type,$Country,$Company_Id ,$Id,$img)
	{
		    
            $sql ="UPDATE Product SET Name ='$Name',Description ='$Description' ,Price ='$Price',Num ='$Num' ,P_Type='$P_Type' ,Country='$Country',Company_Id='$Company_Id',img='$img' where Id='".$Id."'";
            $result = mysqli_query($this->conn,$sql);
	     	return $result;
	}
	public function Get_Product_Id($name)
	{
	
		
            $sql ="select Id FROM Product where Name='".$name."'";
            $result = mysqli_query($this->conn,$sql);
			$row = mysqli_fetch_assoc($result);
			return $row["Id"];
	}
	
	
	
	
	
	public function Get_Product_info($Id)
	{
		
            $sql ="select * FROM Product where Id='".$Id."'";
            $result = mysqli_query($this->conn,$sql);
			
			return $result;
	}
		public function Get_Product_info2($name)
	{
		
            $sql ="select * FROM Product where Name='".$name."'";
            $result = mysqli_query($this->conn,$sql);
			
			return $result;
	}
	
	
public function buy()
	{
	$sql = "INSERT INTO purchases (Address ,date ,phone_num	 ,time  ) Values ('$address' ,'$phone_num' ,'$time','$date'  )";
            $result = mysqli_query($this->conn, $sql);
		   
			 return $result;
	}
	
}

class Company extends  foo
{
  public function View_Company()
	{
		
            $sql = "SELECT Name FROM Company";
            $result= mysqli_query($this->conn, $sql);
         
			return $result;
	}
	public function View_s_Company($Name)
	{	
            $sql = "SELECT * FROM Company where Name='".$Name."'";
            $result= mysqli_query($this->conn, $sql);
         
			return $result;
		
		
	}
	public function Get_Company_Id($Name)
	{
		
            $sql = "SELECT Id FROM company where Name='".$Name."'";
            $result = mysqli_query($this->conn, $sql);
	        
         $row=mysqli_fetch_assoc($result);
	       return $row["Id"];
	}
	
	public function Delete_Company($name)
	{
		
            $sql ="delete FROM company where Name='".$name."'";
            $result = mysqli_query($this->conn,$sql);
			return $result;
	}
	
	public function Edit_Company($Name ,$Phone ,$Email,$old_name,$img,$desc)
	{       echo $Name;
	        echo $Phone;
			echo $Email;
			echo $old_name;
		    
            $sql ="UPDATE Company SET Name ='$Name',Phone_Num ='$Phone',Email='$Email',img='$img',description='$desc' where Name='".$old_name."'";
            $result = mysqli_query($this->conn,$sql);
	     	return $result;
	}
	
	public function Add_Company($Name,$Phone_Num,$Email,$Describtion,$img)
	{ 
			echo $Name; echo $Phone_Num; echo $Email; echo $Describtion;
            $sql = "INSERT INTO Company (Name,Phone_Num,Email,description,img  ) Values ('$Name'  ,'$Phone_Num','$Email','$Describtion','$img' )";
            $result = mysqli_query($this->conn, $sql);
		     
			 return $result;
	}
	
	
		
}


//////////////////////////////////////////Offers ////////////////////////////////////////

class Offer extends  foo
{
	  public function View_Offer()
	{		
            $sql = "SELECT * FROM offer";
            $result= mysqli_query($this->conn, $sql);
			return $result;
	}
		
	public function Add_Offer($Name,$Descrip,$Price,$Precent,$St_Date,$E_Date ,$Product_Id)
	{ 
            $sql = "INSERT INTO offer ( Name,Description,Price_After,Precentage,Start_date,End_date ,product_Id) Values ('$Name' ,'$Descrip','$Price','$Precent','$St_Date' ,'$E_Date','$Product_Id')";
            $result = mysqli_query($this->conn, $sql);
			return $result;
	}
		public function Delete_Offer($name)
	{
            $sql ="delete FROM offer where Name='".$name."'";
            $result = mysqli_query($this->conn,$sql);
			return $result;
	}
	
	public function Edit_Offer($Name,$Descrip,$Price,$Precent,$St_date,$E_date ,$Product_Id ,$Old_name)
	{        
		    $sql ="UPDATE offer SET Name ='$Name',Description ='$Descrip' ,Price_After ='$Price',Precentage ='$Precent' ,Start_date='$St_date' ,End_date='$E_date',Product_Id='$Product_Id' where Name='".$Old_name."'";
            $result = mysqli_query($this->conn,$sql);
	     	return $result;
	}
	public function Get_Offer_Name()
	{
            $sql ="SELECT Name FROM offer";
            $result = mysqli_query($this->conn,$sql);
			return $result;
	}
	public function Get_Offer_Id($name)
	{
            $sql ="select Id FROM offer where Name='".$name."'";
            $result = mysqli_query($this->conn,$sql);
			$row = mysqli_fetch_assoc($result);
			return $row["Id"];
	}
	public function Get_Offer_info($name)
	{
		
            $sql ="select * FROM offer where Name='".$name."'";
            $result = mysqli_query($this->conn,$sql);			
			return $result;
	}

	
}







class Gallary extends  foo
{}
class Pipes extends  foo
{}

class Order extends  foo
{
	  public function Get_Product_Id($ID)
	{
            $sql = "SELECT * FROM orders where Account_Id='".$ID."'";
            $result= mysqli_query($this->conn, $sql);
			return $result;
	}
	
	public function Get2_Product_Id($ID)
	{
            $sql = "SELECT * FROM orders where Account_Id='".$ID."'";
            $result= mysqli_query($this->conn, $sql);
			$row=mysqli_fetch_assoc($result);
	        return $row["Id"];
	}
	
	 public function Update_Order($Id,$Product_Id,$Num)
	{
            $sql = "UPDATE Orders SET Num ='$Num' where Account_Id='".$Id."' AND Product_Id='".$Product_Id."'";
            $result= mysqli_query($this->conn, $sql);
			return $result;
	}
	
	
	public function Insert_order($res,$Accont_id,$Product_id )
	{
	    
	
	    
	    $sql="INSERT INTO orders (Num,Account_Id,product_Id) Values ('$res','$Accont_id','$Product_id')";
        $result = mysqli_query($this->conn, $sql);			
		if($result)
		{
		//$error = "Sorry Your Login Name or Password is invalid , try again";
		 
		// echo "<script type='text/javascript'>alert('$error');</script>";
			 
		}
		
	}
	public function Delete_order($name)
	{
		
            $sql ="delete FROM orders where Num='".$name."'";
            $result = mysqli_query($this->conn,$sql);
			return $result;
	}
public function Check($ID,$accont_id)
	{
		$sql="Select * from orders where product_Id='".$ID."' AND Account_Id='".$accont_id."'";  //And Accont_id = '".$accont_id."'";
		if ($stmt = $this->conn->prepare($sql)) 
		{
          /* execute query */
          $stmt->execute();
         /* store result */
         $stmt->store_result();
    //printf("Number of rows: %d.\n", $stmt->num_rows);
        if($stmt->num_rows !=0)
        {		
       $error1 = "Sorry";			
        }
      else 
	  {  
      $error1 = "ok";  
      }	
     $stmt->close();	
			
	  }
	
 return $error1;	
	}
}

?>
