<?php include("db/dbconn.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <title>Donator details</title>
    <style>
        #donar_table{
            padding-top:20px;
        }
        small
        {
            color:red;
        }
    </style>
</head>
<body>

<h1 align="center">Donators Informations</h1>
<div class="container-fluid" id="donar_table">
<center>
    <table border="2px" cellpadding="10px" cellspacing="4px">
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
        <th>About Blood</th>
        </tr>
        <?php   
            $query="SELECT * FROM donators";
            $result=mysqli_query($conn,$query);
            while($userinfo=mysqli_fetch_assoc($result)){
                echo"<tr>
                    <td>$userinfo[UserID]</td>
                    <td>$userinfo[Fname]</td>
                    <td>$userinfo[Lname]</td>
                    <td>$userinfo[Email]</td>
                    <td>$userinfo[Addres]</td>
                    <td>$userinfo[Mobile]</td>
                    <td>$userinfo[Othermobile]</td>
                    <td>$userinfo[Passwords]</td>
                    <td>$userinfo[Bloodgroup]</td>
                    <td>$userinfo[Usertype]</td>
                    <td>$userinfo[Report]</td>
                    </tr>";
            }

        ?>
    </table>
</center>
</div>
<div class="container-fluid">
    <h2 class="mt-3">Oparations</h2>
    <div class="form-row">
        <div class="form-group col-md-4">
                <label for="">Click the button to add new user</label><br>             
                <div class="container">
                    <form action="function/add_new_user_by_admin.php" method="post">
                        <div class="mt-4"> 
                        <div class="form-row">
                            <div class="form-group col-md-6"id="this">
                                <label for="Fname" >First Name</label>
                                <input type="text" class="form-control" name="First_Name"  id="fname" >
                                <small><?php if(isset($_GET["fname_erro"])){echo "You must provide a first name";} ?></small>
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="Fname">Last Name</label>
                                    <input type="text" class="form-control" name="Last_Name" id="lname" >
                                    <small><?php if(isset($_GET["lname_erro"])){echo "You must provide a last name";} ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="email" >Email</label>
                                    <input type="email" class="form-control" name="Email" id="email" >
                                    <small><?php if(isset($_GET["email_erro"])){echo "Email address is required";} ?></small>
                                </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="Address" >Address</label>
                                    <input type="text" class="form-control" name="Address" id="address" >
                                    <small><?php if(isset($_GET["address_erro"])){echo "Your address should be provid";} ?></small>
                                </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="mobile" >Mobile</label>
                                    <input type="text" class="form-control" name="Mobile"  id="mobile" onclick="defaltcolor()">
                                    <small><?php if(isset($_GET["mobile_erro"])){echo "Contact Number should be provide";} ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="landphone" >Other Numbers</label>
                                        <input type="text" class="form-control" name="Other_Number"  id="omobile">
                                </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password" >Password</label>
                                    <input type="password" class="form-control" name="Password"  id="password" >
                                    <small><?php if(isset($_GET["password_erro"])){echo "You must enter a password";} ?></small>
                                </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="C_password" >Comfirm Password</label>
                                    <input type="password" class="form-control" name="C_password" id="c_password">
                                    <small><?php if(isset($_GET["CPassword_erro"])){echo "Check You enterd password is not matching with comfirm password";} ?></small>
                                </div>
                                <div class="form-group col-md-6"></div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="blood" >Blood Group</label>
                                    <select name="Blood_group" class="form-control"  id="faculty" >
                                        <option value=""></option>
                                        <option value="A+" >A+</option>
                                        <option value="A-" >A-</option>
                                        <option value="B+" >B+</option>
                                        <option value="B-" >B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                    <small><?php if(isset($_GET["bloodgroup_erro"])){echo "You must select a bloodgroup";} ?></small>
                                </div>
                        </div>
                        <div class="form-row " style="padding-top:60px;">
                            <div class="form group">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form group col-md-6"></div>
                                <div class="form-group" style="padding-left: 120px ;">
                                        <input type="submit" onclick="return checkname()" name="Sign" value="Add User" class="btn btn-primary">&nbsp&nbsp
                                        <input type="button" value="Cancel" class="btn btn-primary ">
                                </div>
                        </div>
                    </div>
                    </form>
                 </div>
        </div>
        <div class="form-group col-md-4">
        <div class="container-fluid">
                <form action="function/delete_user.php" method="post">
                    <label for="">Click the button to delete donar</label><br>
                    <div class="form-group mt-4">
                        <label for="">Enter User ID For Delete</label><br>
                        <input type="text" name="delete_id" class="form-control" id="">
                        <small><?php if(isset($_GET["delete_id"])){echo "You must enter a id to delete the target person";}else if(isset($_GET["delete_id_invalid"])) {echo"ID that you enterd not valid";} ?></small><br>
                        <div align="center">
                            <button type="submit" class="btn btn-primary">Delete Donar</button>
                        </div>
                    </div>
                </form>
                <form action="function/search_user.php" method="post" class="mt-5">
                            <label for="">Click the button to search a specific user</label><br>
                            <label for="">Enter blow information to find user</label><br>
                            <div class="form-row">
                                                <div class="form-group col-md-6 mt-3"id="this">
                                                    <label for="Fname" >First Name</label>
                                                    <input type="text" class="form-control" name="fname" >
                                                    <small><?php if(isset($_GET["fname_erro"])){echo "You must provide a first name";} ?></small>
                                                </div>
                                                <div class="form-group col-md-6 mt-3">
                                                        <label for="Fname">Last Name</label>
                                                        <input type="text" class="form-control" name="lname" >
                                                        <small><?php if(isset($_GET["lname_erro"])){echo "You must provide a last name";} ?></small>
                                                </div>
                                            </div>
                            <div align="center">
                            <button type="submit" class="btn btn-primary">Search User</button>
                            </div>
                    </form>
                    <form action="Create_post.php" method="post">
                        <label for="">Click the below button for Create an event</label><br>
                        <div class="form-group mt-4">
                            <div align="center">
                                <button type="submit" class="btn btn-primary">Create Post</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>

        <div class="form-group col-md-4">
            <div class="container-fluid">
                        <label for="">Click the button to update donar Informations with relevent field</label><br><br>
                        <div class="form-group">
                            <label for="">Enter User ID For Update Donar Informations</label><br>
                            <form action="function/update_user.php" method="post">
                            <input type="text" name="update_id" class="form-control">
                            <small><?php if(isset($_GET["update_id"])){echo "You must enter a id to update the target person field";}else if(isset($_GET["update_id_invalid"])) {echo"ID that you enterd not valid";} ?></small><br>
                            <div class="container">
                            <h2> Enter Relevent Only Fields For Update</h2>
                                <div class="mt-4">
                                <div class="form-row">
                                    <div class="form-group col-md-6"id="this">
                                        <label for="Fname" >First Name</label>
                                        <input type="text" class="form-control" name="First_Name"  id="fname" >
                                        <small><?php if(isset($_GET["fname"])){echo "You must provide a proper first name";} ?></small>
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="Fname">Last Name</label>
                                            <input type="text" class="form-control" name="Last_Name" id="lname" >
                                            <small><?php if(isset($_GET["lname"])){echo "You must provide a proper last name";} ?></small>
                                    </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="email" >Email</label>
                                            <input type="email" class="form-control" name="Email" id="email" >
                                            <small><?php if(isset($_GET["email"])){echo "Email address is required";} ?></small>
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="Address" >Address</label>
                                            <input type="text" class="form-control" name="Address" id="address" >
                                            <small><?php if(isset($_GET["address"])){echo "Your address should be provid";} ?></small>
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="mobile" >Mobile</label>
                                            <input type="text" class="form-control" name="Mobile"  id="mobile" onclick="defaltcolor()">
                                            <small><?php if(isset($_GET["mobile"])){echo "Contact Number should be provide";} ?></small>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="landphone" >Other Numbers</label>
                                                <input type="text" class="form-control" name="Other_Number"  id="omobile">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="password" >Password</label>
                                            <input type="password" class="form-control" name="Password"  id="password" >
                                            <small><?php if(isset($_GET["password"])){echo "You must enter a password";} ?></small>
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="C_password" >Comfirm Password</label>
                                            <input type="password" class="form-control" name="C_password" id="c_password">
                                            <small><?php if(isset($_GET["Cpassword"])){echo "Check You enterd password is not matching with comfirm password";} ?></small>
                                        </div>
                                        <div class="form-group col-md-6"></div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="blood" >Blood Group</label>
                                            <select name="Blood_group" class="form-control"  id="" >
                                                <option value=""></option>
                                                <option value="A+" >A+</option>
                                                <option value="A-" >A-</option>
                                                <option value="B+" >B+</option>
                                                <option value="B-" >B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                            <small><?php if(isset($_GET["bloodgroup"])){echo "You must select a bloodgroup";} ?></small>
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="blood" >User Type</label>
                                            <select name="User_type" class="form-control"  id="" >
                                                <option value="User" >User</option>
                                                <option value="Admin" >Admin</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="donar info" >About Donar blood</label>
                                            <textarea rows=10px class="form-control" name="BloodReport" ></textarea>
                                        </div>
                                </div>
                                <div class="form-row " style="padding-top:60px;">
                                    <div class="form group"></div>
                                </div>
                                <div class="form-row">
                                        <div class="form group col-md-6"></div>
                                            <div class="form-group" style="padding-left: 110px ;">
                                                    <input type="submit" onclick="return checkname()" name="Sign" value="Update" class="btn btn-primary">&nbsp&nbsp
                                                    <input type="submit" value="Cancel" class="btn btn-primary " name="cancel">
                                            </div>
                                        </div>
                                </div>
                            </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>