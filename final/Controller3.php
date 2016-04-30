<?php
include("new-query.php");

class controller 
{
	private $query;
	
	public function __construct()
	{  
		$this->query=new query();
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
        $numResults= $this->query->Get_Emails($email);

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
			
			$this->query->creat_Account($username,$password ,$email);
		  }
	
        }
        } 
     }
	}
	
		public function View_Company()
	{
		$result = $this->query->View_Company();
		return $result ;
   
	}
	public function View_Products()
	{
		$result = $this->query->View_Products();
		return $result ;
   
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
     
     
		 $username= $_POST["username"];
         $password =  $_POST["password"];
		  $_SESSION['username']= $username;
		  $_SESSION['logged']= true;
         $result = $this->query->Log_In($username,$password);
		 
				
      
	 
	  
	  }
	 
		  
         
	  }
		
				
				
	  
                
        
		
	  }
		
   
	}
	public function View_Acc()
	{
		$result = $this->query->View_Acc();
		return $result ;
		
	}
	
	
	
	
}

?>