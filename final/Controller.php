<?php
include("new-query.php");

class controller 
{
	private $Account;
	private $Company;
	private $Product;
	private $Offer;
	private $Gallary;
	private $Pipes;
	private $Order;
	
	public function __construct()
	{  
		$this->Account=new Account();
		$this->Company=new Company();
		$this->Product=new Product();
		$this->Offer=new Offer();
		$this->Pipes=new Pipes();
		$this->Order=new Order();
		
	}
	public function get_UserName()
	{ 
	  
	   if(isset($_SESSION["mail"]))  
	
	  {
		  $res=$this->Account->get_UserName();
		  return $res;
		  echo $res;
	  }
		else 
			return Null;
	}
	
	
	
	public function creat_Account()
	{
		if(isset($_POST['action']))
      {          
        if($_POST['action']=="signup")
        {
        $username= $_POST["name"];
        $email= $_POST["email"];
        $password=$_POST["password"]; 
        $numResults= $this->Account->Get_Emails($email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            echo $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
        }
        else
        {
	      if($username!=""&&$email!=""&&$password!="")
		  {
			
			$this->Account->creat_Account($username,$password ,$email);
		  }
	
        }
        } 
     }
	}

	
	  
	
	
        public function View_Products()
	{
		$result = $this->Product->View_Products();
		return $result ;
   
	}
	public function View_s_Company()
	{
		$content= isset($_GET['content'])?$_GET['content']:'';
		
		$result= $this->Company->view_s_company($content);
		return $result;
		
		
	}
	
	public function View_E_Company()
	{
		
		
		$result= $this->Company->view_s_company($_SESSION['Company']);
		
		 $row = mysqli_fetch_assoc($result);
			 return $row ;
		
		
	}
	
	public function View_Company()
	{
		$result = $this->Company->View_Company();
		return $result ;
   
	}
	
	

public  function my_is_int($var) 
{
    return preg_match('/^\d+$/', $var);
}

public function Add_Product()
	{  
	   $error="adding product failed";
	   $success="product is added  successfully";
	   $valid="price must be a number or quantity must be an integer number  ";
		if(isset($_POST['action']))
      {          
        if($_POST['action']=="Add")
        {  
	 
	
                $name= $_POST["name"];
				$description=$_POST["description"];
                $price= $_POST["price"];
                $quantity=$_POST["quantity"]; 
//				$Rate=$_POST[""]; 
				$type=$_POST["type"];		
				$countery=$_POST["countery"];
				$company=$_POST["company"];	
				$result1=$this->Company->Get_Company_Id($company);
		
	
	
		

   
 if(isset($_FILES['image']))
 {
	
	$target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
	{
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } 
	else {
        echo "Sorry, there was an error uploading your file.";
    } 
	 
	$fp=basename( $_FILES["image"]["name"],".jpg");

 }
	
			if(Controller::my_is_int($quantity)&&is_numeric ($price))
			{ 
		       $result=$this->Product->Add_Product($name ,$description,$price,$quantity,0,$type,$countery,$result1, $fp );
			   if($result)
		  
		     echo "<script type='text/javascript'>alert('$success');</script>";
	         else
		     echo "<script type='text/javascript'>alert('$error');</script>";
	
		    }
			else echo "<script type='text/javascript'>alert('$valid');</script>";
		
	   
		}
	
        }
        
	}	
	 public function Get_Product_Names()
	{   $error = "Sorry Your Login Name or Password is invalid , try again";
		$result = $this->Product->Get_Product_Names();
		if($result)
		  
					echo "Company Added successfully";
	   else
		     echo "<script type='text/javascript'>alert('$error');</script>";
		return $result ;
   
	}
	public function Calc_Rate()
	{
	 
	$error="failed";
	$success="  success";
	if(isset($_POST['action']))
	
	{
	if($_POST['action']=="submit_rate")
	{
	$_SESSION["total_rate"]=0;
	$_SESSION["num_rate"]=0;
	$rate=$_POST["star"];
	$name=$_SESSION["name"];
	$t_r=$_SESSION["total_rate"];
	$total_rate=$t_r+$rate;
	$num_r=$_SESSION["num_rate"];
	$num_rate=$num_r+1;
	$new_rate=$total_rate/$num_rate;
	
	$result=$this->Product->set_rate($name,$new_rate);
	    
	   	
}
	}
	}
	public function Delete_Product()
	
	{  $error="deletion failed";
	   $success="product deleted  successfully";
		if(isset($_POST['action']))
      {          
        if (!empty($_POST['action']=="Delete Product"))
        {
            $name= $_POST["Product"];
			
			$result=$this->Product->Delete_Product($name);
			//header("Location: http://localhost/final2/final/admin2.php"); /* Redirect browser */	
           
	   if($result)
		  
		  echo "<script type='text/javascript'>alert('$success');</script>";
	   else
		     echo "<script type='text/javascript'>alert('$error');</script>";
			header("Location: /http://localhost/final2/final/Edit_Product.php"); /* Redirect browser */	
	
	

	
        }
            
	 }
	}
   
	public function Delete_Company()
	{  
		$error="Deletion failed";
	    $success="Company deleted  successfully";
		if(isset($_POST['action2']))
		{
        if($_POST['action2']=="Delete Company")
        {
            $name= $_POST["company"];	
			$result=$this->Company->Delete_Company($name);
			if($result)
		  		  echo "<script type='text/javascript'>alert('$success');</script>";
			else
				echo "<script type='text/javascript'>alert('$error');</script>";
			
			header("Location: /http://localhost/final2/final/Edit_Company.php"); /* Redirect browser */	
        }
            
	  }
	}
	public function  Get_Product_Id()
	
	{   session_start();
	   $success="Product is Edited  successfully";
		if(isset($_POST['action']))
      {          
        if($_POST['action']=="Edit Product")
        {
            $name= $_POST["Product"];
			
			
			$result=$this->Product->Get_Product_Id($name);
			
			$_SESSION['product']=$result;
			//echo "<script type='text/javascript'>alert('$success');</script>";
			echo "<script>window.location = 'http://localhost/final2/final/Edit_Product.php' </script>";
			
	        
			
	    }
	  }

    }
	
	public function  Get_Company_Name()
	
	{   session_start();
		if(isset($_POST['action2']))
      {          
        if($_POST['action2']=="Edit Company")
        {
            $name= $_POST["company"];			
			$_SESSION['Company']=$name;
	        echo "<script>window.location = 'http://localhost/final2/final/Edit_Company.php' </script>";
		
	    }
	  }

    }
	public function Edit_Product()
	{   $valid="price must be a number or quantity must be an integer number  ";
		$error="Edit_Product failed";
	   $success="Product is Edited  successfully";
		if(isset($_POST['action']))
      {          
        if($_POST['action']=="Edit")
        {
        $name= $_POST["name"];
        $price= $_POST["price"];
        $quantity=$_POST["quantity"]; 
		$type=$_POST["type"];
		$description=$_POST["description"];
		$country=$_POST["country"];
		$company=$_POST["company"];
		$result1=$this->Company->Get_Company_Id($company);
			$result2=$_SESSION['product'];
		
		
		if(isset($_FILES['image']))
 {
	
	$target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
	{
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } 
	else {
        echo "Sorry, there was an error uploading your file.";
    } 
	 
	$fp=basename( $_FILES["image"]["name"],".jpg");

 }
		if(Controller::my_is_int($quantity)&&is_numeric ($price))
			{ 
		       	$result=$this->Product->Edit_Product($name ,$description,$price,$quantity,$type,$country,$result1,$_SESSION['product'],$fp );
			   if($result)
		  
		     echo "<script type='text/javascript'>alert('$success');</script>";
	         else
		     echo "<script type='text/javascript'>alert('$error');</script>";
	
		    }
			else echo "<script type='text/javascript'>alert('$valid');</script>";
		
	
	        
			
	
		}
	
        }
        
	}
	public function Edit_Company()
	{  
		$error="Edit_Company failed";
	   $success="Company is Edited  successfully";
		if(isset($_POST['action']))
      {          
        if($_POST['action']=="Edit")
        {
        $name= $_POST["name"];
        $phone= $_POST["phone"];
        $email=$_POST["email"]; 
		$desc=$_POST["Describtion"]; 
					if(isset($_FILES['image']))
 {
	
	$target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
	{
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } 
	else {
        echo "Sorry, there was an error uploading your file.";
    } 
	 
	$fp=basename( $_FILES["image"]["name"],".jpg");

 }
			
		
		$result=$this->Company->Edit_Company($name ,$phone, $email,$_SESSION['Company'],$fp,$desc );
	        
			if($result)
		  
				echo "<script type='text/javascript'>alert('$success');</script>";
	        else
		     echo "<script type='text/javascript'>alert('$error');</script>";
	
		}
	
        }
        
	}
	public function view_E_Product()
	{    
	
	    
		
       $result=$this->Product->Get_Product_info($_SESSION['product']);
       $row = mysqli_fetch_assoc($result);
			 return $row ;
			 
		
	        
			
	
		}
		
		public function View_s_Product()
	{
		$content= isset($_GET['content'])?$_GET['content']:'';
		
			
       $result=$this->Product->Get_Product_info2($content);
       $row = mysqli_fetch_assoc($result);
			 return $row ;
		
		
	}
	
      
      public function Log_In()
	{
		
        if(isset($_POST["action1"]) )
      {     
          
  
        if($_POST['action1']=="SIGN IN")
        {
		
		 session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
       //username and password sent from form 
     
     
		  $mail= $_POST["mail"];
          $password =  $_POST["password"];
		  $_SESSION['mail']= $mail;
		  $_SESSION['logged']= true;
          $result = $this->Account->Log_In($mail,$password);
		
	  } 
	  }    
		
	  }
		
   
	}
	
	public function Add_Company()
	{
		if(isset($_POST['action']))
      {          
             
        if($_POST['action']=="Add")
        {
            $name= $_POST["name"];
            $phone_num=$_POST["phone_num"];
			$email=$_POST["email"]; 
			$Describtion =$_POST["Describtion"];
                
		if(isset($_FILES['image']))
		{
			$error="Addition failed";
			$success="Company added  successfully";
			$target_dir = "upload/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
		{
			echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		} 
		else 
		{
        echo "Sorry, there was an error uploading your file.";
		} 
	 
		$fp=basename( $_FILES["image"]["name"],".jpg");

		}
			$result=$this->Company->Add_Company($name,$phone_num,$email,$Describtion,$fp);
			echo $result;
	         if($result)
				echo "<script type='text/javascript'>alert('$success');</script>";
	         else
				echo "<script type='text/javascript'>alert('$error');</script>";
	}
    }      
	}
	
	
	public function View_Acc()
	{
		$result = $this->Account->View_Acc();
		return $result ;
		
	}
	
	   public function Update_Account()
	   {
		   $result = $this->Account->Update_Acc();
		   return $result ;
		   
	   }
	   
	   public function View_Order()
	{
	    $name= $this->Account->get_UserName();
		$result1 = $this->Account->Get_Id($name);
		$result2 = $this->Order->Get_Product_Id($result1 );
		return $result2  ;
   
	}
	
	public function Get_Product_info($Id)
	{
		$result1 = $this->Product->Get_Product_info($Id);
		$row = mysqli_fetch_assoc($result1);
		return $row ;
            
	}
	
	public  function Get_PName()
	{
		
		
		$content= isset($_GET['content'])?$_GET['content']:'';
		$result1 = $this->Product->Get_Product_info2($content);
        $row = mysqli_fetch_assoc($result1);
	   
	   return $row;
	   
	}
	
	
	public function Add_to_cart()
	{
		 
		
		if(isset($_POST["action1"]) )
      {     
          
  
        if($_POST['action1']=="Add")
        {
		        
  	     $row=self::Get_PName();
		
		$name= $this->Account->get_UserName();
		$Accont_id = $this->Account->Get_Id($name);
		$this->Order->Insert_order($row['Num'],$Accont_id,$row['Id']);
		
		//header("Location: http://localhost/final2/final/Order.php"); 
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://localhost/final2/final/Order.php">';
	  }}
	}
	
	 public function Delete_from_cart()
	{
		//$error = "Sorryuu888uuuuuuuuuuuuu ";
		//echo "<script type='text/javascript'>alert('$error');</script>";
		
		if(isset($_POST['Action']))
      {          
  
       
        if (!empty($_POST['Action']=="Delete"))
        {
			// $error = "Sorry ";
		 
		//echo "<script type='text/javascript'>alert('$error');</script>";
		$row=self::Get_PName();
		
		$this->Order->Delete_order((int)$row['Num']);
	    }
	  }
		
	}
	
	
        
     
	
	
	
	
	
	
	public function Modify_Quantity()
	{     	$error="Edit_Company failed";
	   $success="Company is Edited  successfully";
		if(isset($_POST['Action']))
      {          
        if($_POST['Action']=="Update Quantity")
        {
            $num= $_POST["num"];
			$content= isset($_GET['content'])?$_GET['content']:'';
		    $name= $this->Account->get_UserName();
			$result1 = $this->Account->Get_Id($name);	
			$result2 = $this->Product->Get_Product_Id($content);
           $result3= $this->Order->Update_Order($result1,$result2,$num);
		   echo $result1;
		   echo $result2;
		   echo $num;
		   
		  /*  if($result3)
		  
				echo "<script type='text/javascript'>alert('$success');</script>";
	        else
		     echo "<script type='text/javascript'>alert('$error');</script>";
	
		    */
		}         
	  }

	}
	
	public function Delete_Order()
	{     	$error="Edit_Company failed";
	   $success="Company is Edited  successfully";
		if(isset($_POST['Action2']))
      {          
        if($_POST['Action2']=="Delete All")
        {
            $name= $this->Account->get_UserName();
			$result1 = $this->Account->Get_Id($name);
			$result2 = $this->Order->Delete_Order($result1);
		   
		}         
	  }

	}
	
	 	 public function search()
 
 
 { 

 $error="failed";
 $success="  success";

 
 if(isset($_POST['action']))
 {
 if($_POST['action']=="search")
 {
 $name=$_POST['term'];
 $result=$this->Product->search($name);
 $_SESSION["Search"]=$name;

 
 	echo "<script>window.location = 'http://localhost/final2/final/search.php ?c=".$name."' </script>";
		
 }
 }
 }
 
public function Get_Product_info2()
{ 

 $result=$this->Product->search($_GET['c']);
 return $result;

}
 

	
	
	////////////////////////// Offers /////////////////////////////////
	
	public function Add_Offer()
	{
	   $error="Adding Offer failed";
	   $success="Offer is added  successfully";
	   $valid="price must be a number ";
		if(isset($_POST['action']))
		{          
        if($_POST['action']=="Add")
        {	
            $name= $_POST["Name"];
            $Descrip= $_POST["Description"];
            $Price=$_POST["Price_After"]; 
			$Precent=$_POST["Precentage"];
			$St_date=$_POST["Start_date"];
			$E_date=$_POST["End_date"];
			$product=$_POST["product"];
			$result1=$this->Product->Get_Product_Id($product);

			echo $name ;echo $Descrip; echo $Price; echo $Precent;echo $St_date ;echo $E_date; echo $result1; echo "       ";
			if(Controller::my_is_int($Price))
			{ 
		       $result=$this->Offer->Add_Offer($name ,$Descrip,$Price,$Precent,$St_date,$E_date,$result1);
   			   if($result)
			   {
				   echo "battiiii5";
				   echo "<script type='text/javascript'>alert('$success');</script>";
			   }
				
	           else
  			   { 
				  echo "AAAA";
				  echo "<script type='text/javascript'>alert('$error');</script>"; 
			   }
				
		    }
			else
			{
				echo "<script type='text/javascript'>alert('$valid');</script>";	   
			}
		}
       } 
	}	
	
	

	public function Edit_Offer()
	{
		$valid="price must be a number ";
		$error="Edit_Offer failed";
   	    $success="Offer is Edited  successfully";
		
		 if(isset($_POST['action']))
        {          
			if($_POST['action']=="Edit")
			{
			 $name= $_POST["Name"];
            $Descrip= $_POST["Description"];
            $Price=$_POST["Price_After"]; 
			$Precent=$_POST["Precentage"];
			$St_date=$_POST["Start_date"];
			$E_date=$_POST["End_date"];
			$Product=$_POST["Product"];
			$result1=$this->Product->Get_Product_Id($Product);
			$result2=$_SESSION['offer'];			


		if(Controller::my_is_int($Price))
		{ 
		       $result=$this->Offer->Edit_Offer($name ,$Descrip,$Price,$Precent,$St_date,$E_date,$result1,$result2);
			   if($result)
		  		     echo "<script type='text/javascript'>alert('$success');</script>";
	         else
				echo "<script type='text/javascript'>alert('$error');</script>";
		}
				else echo "<script type='text/javascript'>alert('$valid');</script>";	
		}
	   }
	}


	
	public function Delete_Offer()
	{ 
		$error="Deletion failed";
	    $success="Offer deleted  successfully";
		if(isset($_POST['action3']))
       {   
			if (!empty($_POST['action3']=="Delete Offer"))
			{
				$name= $_POST["Offer"];
				$result=$this->Offer->Delete_Offer($name);
           
	   if($result)
		  
		  echo "<script type='text/javascript'>alert('$success');</script>";
	   else
		     echo "<script type='text/javascript'>alert('$error');</script>";
			header("Location: /http://localhost/final2/final/Edit_Offer.php"); /* Redirect browser */	
		
        }
            
	 }
	}

     public function View_Offer()
	{
		$result = $this->Offer->View_Offer();
		return $result ;
   
	}


public function  Get_Offer_Name()
	
	{   session_start();
		if(isset($_POST['action3']))
      {          
        if($_POST['action3']=="Edit Offer")
        {
            $name= $_POST["Offer"];			
			$_SESSION['offer']=$name;
			
			
			
			
	        echo "<script>window.location = 'http://localhost/final2/final/Edit_Offer.php' </script>";
		
	    }
	  }

    }
		public function View_E_Offer()
		{      
			$result=$this->Offer->Get_Offer_info($_SESSION['offer']);
			$row = mysqli_fetch_assoc($result);
			return $row ;
			
		}
		
	public function View_S_Offer()
	{
	   $content= isset($_GET['content'])?$_GET['content']:'';
       $result=$this->Offer->Get_Offer_info($content);
       $row = mysqli_fetch_assoc($result);
	   return $row ;		
	}







}
	
?>
