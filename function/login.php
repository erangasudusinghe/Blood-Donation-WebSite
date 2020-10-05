<?php

session_start();
include("../db/dbconn.php");

$error=array();
if(((""==$_POST["user_name"]))||(trim($_POST["user_name"])>1))
{
    $error[]="invalid input for user name ";
}
if(((""==$_POST["user_password"]))||((trim($_POST["user_password"]))>1))
{
    $error[]="invalid input for password ";
}
if(empty($error))
{
    $user_name = mysqli_real_escape_string($conn,trim($_POST["user_name"])); 
    $password = mysqli_real_escape_string($conn,trim($_POST["user_password"]));
    $type = $_POST["user_type"];
    $query="SELECT * FROM donators WHERE Email='{$user_name}'AND Passwords='{$password}'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        if(mysqli_num_rows($result)==1){
            $user_data = mysqli_fetch_assoc($result);
            if($user_data["Usertype"]=="User")
            {
                $_SESSION["account_fname"]=$user_data["Fname"];
                $_SESSION["account_lname"]=$user_data["Lname"];
                $_SESSION["account_id"]=$user_data["UserID"];
                header("location:../index.php");
            }
            if($user_data["Usertype"]=="Admin")
            {
                $_SESSION["account_fname"]=$user_data["Fname"];
                $_SESSION["account_lname"]=$user_data["Lname"];
                $_SESSION["account_id"]=$user_data["UserID"];
                $_SESSION["admin"]=$user_data["Usertype"];
                header("location:../index.php");
            }
            
            
        }
        else
        {
            $error[]="no matchig data found";
            echo "<h2>Something went to wrong</h2>";
        }
    }
    else
    {
        $error[]="data base query fail";
        echo "<h2>Something went to wrong</h2>";
    }

}
else
{ 
    header("location:../comon/navigation.php?erro=invalid");
}

?>