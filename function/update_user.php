<?php 
include("../db/dbconn.php");
if(isset($_POST["cancel"]))
{
  header("location:../donators_info.php");
}
else
{
    if(""!=$_POST["update_id"])
    {
        $erro_array=array();
        $user=$_POST["update_id"];
        $query1 = "SELECT * FROM donators WHERE UserID='{$user}'";
        $result_set=mysqli_query($conn,$query1);
        $user_info=mysqli_fetch_assoc($result_set);    
        if(mysqli_num_rows($result_set)>=1)
        {
            if(""==$_POST["First_Name"])
            {
               $First_Name =$user_info["Fname"];
            }
            else
            {
                if(is_numeric($_POST["First_Name"]))
                {
                   $erro_array[0]=0;
                   $First_Name =$user_info["Fname"];
                }
                else
                {
                    $First_Name =$_POST["First_Name"];
                }
            }
            if(""==$_POST["Last_Name"])
            {
                $Last_Name=$user_info["Lname"];
            }
            else
            {
                if(is_numeric($_POST["First_Name"]))
                {
                   $erro_array[1]=1;
                   $Last_Name=$user_info["Lname"];
                }
                else
                {
                    $Last_Name=$_POST["Last_Name"];
                }
      
            }
            if(""==$_POST["Email"])
            {
                $Email=$user_info["Email"];
            }
            else
            {
                if(is_numeric($_POST["Email"]))
                {
                   $erro_array[2]=2;
                   $Email=$user_info["Email"];
                }
                else
                {
                    $Email=$_POST["Email"];
                }
                
            }
            if(""==$_POST["Address"])
            {
                $Address=$user_info["Addres"];
            }
            else
            {
                if(is_numeric($_POST["Address"]))
                {
                   $erro_array[3]=3;
                   $Address=$user_info["Addres"];
                }
                else
                {
                    $Address=$_POST["Address"];
                }
                
            }
            if(""==$_POST["Mobile"])
            {
                $Mobile=$user_info["Mobile"];
            }
            else
            { 
                if(is_numeric($_POST["Mobile"]))
                {
                    $Mobile=$_POST["Mobile"];  
                }
                else
                {
                    $Mobile=$user_info["Mobile"];
                    $erro_array[4]=4;
                }
                

            }
            if(""==$_POST["Other_Number"])
            {
                $Other_Number=$user_info["Othernumber"];
            }
            else
            {
                if(is_numeric($_POST["Other_Number"]))
                {
                    $Other_Number=$_POST["Other_Number"];
                }
                else
                {
                    $Other_Number=$user_info["Othernumber"];
                    $erro_array[5]=5;
                }
                
            }
            if(""==$_POST["Blood_group"])
            {
                $Blood_group=$user_info["Bloodgroup"];
            }
            else
            {
                if(is_numeric($_POST["Blood_group"]))
                {
                   $erro_array[6]=6;
                   $Blood_group=$user_info["Bloodgroup"];
                }
                else
                {
                    $Blood_group=$_POST["Blood_group"];
                }
                
            }
            if(""==$_POST["Password"])
            {
                $Password=$user_info["Passwords"];
            }
            else
            {
                if(is_numeric($_POST["Password"]))
                {
                   $erro_array[7]=7;
                   $Password=$user_info["Passwords"];
                }
                else
                {
                    $Password=$_POST["Password"];
                }
            }
            if(""==$_POST["C_password"])
            {
                $C_password=$user_info["CPassword"];
            }
            else
            {
                if(is_numeric($_POST["C_password"]))
                {
                   $erro_array[8]=8;
                   $C_password=$user_info["CPassword"];
                }
                else
                {
                    $C_password=$_POST["C_password"];
                }
               
            }
            if(""==$_POST["User_type"])
            {
                $User_type=$user_info["Usertype"];
            }
            else
            {
                $User_type=$_POST["User_type"];
            }
            if(""==$_POST["BloodReport"])
            {
                $report=$user_info["Report"];
            }
            else
            {
                $report=$_POST["BloodReport"];
            }
            if(empty($erro_array))
            {
                $query2 = "UPDATE donators SET Fname ='$First_Name',Lname='$Last_Name',Email='$Email',Addres='$Address',Mobile='$Mobile',Othermobile='$Other_Number',Bloodgroup='$Blood_group',Passwords='$Password',CPassword='$C_password',Usertype='$User_type',Report='$report' WHERE UserID='{$user}'";
                $result=mysqli_query($conn,$query2);
                header("location:../donators_info.php");
            }
            else
            {
                for($x=0;$x<9;$x++)
                {
                    if($erro_array[$x]!="")
                    {
                        $erro=$x;
                        break;
                    }
                }
                switch($erro)
                {
                    case 0:
                        header("location:../donators_info.php?fname=invalid");
                        break;
                    case 1:
                        header("location:../donators_info.php?lname=invalid");
                        break;
                    case 2:
                        header("location:../donators_info.php?email=invalid");
                        break;
                    case 3:
                        header("location:../donators_info.php?address=invalid");
                        break;
                    case 4:
                        header("location:../donators_info.php?mobile=invalid");
                        break;
                    case 5:
                        header("location:../donators_info.php?other_mobile=invalid");
                        break;
                    case 6:
                        header("location:../donators_info.php?bloodgroup=invalid");
                        break;
                    case 7:
                        header("location:../donators_info.php?password=invalid");
                        break;
                    case 8:
                        header("location:../donators_info.php?Cpassword=invalid");
                        break;
                }
                
            }
           
        }

        else
        {
            header("location:../donators_info.php?update_id_invalid=empty");
        }
    }
    else
    {
        header("location:../donators_info.php?update_id=empty");
    }
}
 
?>