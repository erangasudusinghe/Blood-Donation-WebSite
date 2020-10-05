<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

<?php
    include("../db/dbconn.php");
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    if(""==$fname && ""==$lname)
    {
        echo"Enter first name and last name";
    }
    else
    {
        $query = "SELECT * FROM donators WHERE Fname='{$fname}'OR Lname='{$lname}'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>=1)
        {
            echo"<center>
                <table border=2px cellpadding=10px cellspacing=4px>
                <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Other Number</th>
                <th>Password</th>
                <th>Blood Group</th>
                <th>User Type</th>
                </tr>";

            while( $users=mysqli_fetch_assoc($result))
            {
                    echo"<tr>
                        <td>$users[UserID]</td>
                        <td>$users[Fname]</td>
                        <td>$users[Lname]</td>
                        <td>$users[Email]</td>
                        <td>$users[Addres]</td>
                        <td>$users[Mobile]</td>
                        <td>$users[Othermobile]</td>
                        <td>$users[Passwords]</td>
                        <td>$users[Bloodgroup]</td>
                        <td>$users[Usertype]</td>
                        </tr>";
            }
        }
        else{
            echo"<h2 align=center>The donar does not exsist</h2>";
        }   
    }
?>
</table>
</center>
</body>
</html>
