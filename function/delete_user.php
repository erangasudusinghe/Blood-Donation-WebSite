<?php 
include("../db/dbconn.php");
  if(""!=$_POST["delete_id"])
  {
    $user=$_POST["delete_id"];
    $query1 = "SELECT * FROM donators WHERE UserID='{$user}'";
    $result_set=mysqli_query($conn,$query1);
    
    if(mysqli_num_rows($result_set)>=1)
    {
        $query2 = "DELETE FROM donators WHERE UserID='{$user}'";
        $result=mysqli_query($conn,$query2);
        header("location:../donators_info.php");
    }

    else
    {
        header("location:../donators_info.php?delete_id_invalid=empty");
    }
  }
  else
  {
      header("location:../donators_info.php?delete_id=empty");
  }

?>