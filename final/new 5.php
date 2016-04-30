<?php 
$con=mysql_connect("localhost","adarsh","Password"); 
mysql_select_db("aadarsh",$con);
if(isset($_POST["uname"]) && isset($_POST["pass"]))
{   
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
}
    $sql="select * from users where username='$uname' AND pass='$pass'";
    $select = mysql_query($sql);
    $data = mysql_fetch_array($select);
    $username=$_POST["newname"];
if(isset($_POST['submit']))
{
    if($uname==$data['username'] && $pass==$data['pass'])
    {
        $user_id= $data['id'];
        if(isset($_POST['newname']))
        {
            $update = mysql_query("UPDATE users SET username = '$username' WHERE id = $user_id");       
            if($update)
            {
                echo "<script>alert('updated!');</script>";
                header("location:http://www.example.com");
            }
            else
            {
                echo mysql_error();
            }
        }
    }
    else
    {
        echo "<script>alert('Nope!!!');</script>";
    }
}
?>