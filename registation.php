<?php
include("db/dbconn.php");
include("comon/navigation.php");
?>
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
    <script>
        function checkname()
        {   
            var Fname = document.getElementById("fname");
            var Lname = document.getElementById("lname");
            var Email = document.getElementById("email");
            var Address = document.getElementById("address");
            var Mobile = document.getElementById("mobile");
            var Othermobile = document.getElementById("othermobile");
            var Faculty = document.getElementById("faculty");
            var Tshirt = document.getElementById("tshirt");
            var Password = document.getElementById("password");
            var C_password = document.getElementById("c_password");

            if(Fname.value == "")
            {
                Fname.style.border="red solid 2px";
                required_method(Fname.id);
                return;              
            }
            else if(Lname.value == "")
            {
                Lname.style.border="red solid 2px";
                return;
            }
           
            else if(Email.value == "")
            {
                Email.style.border="red solid 2px";
                return;
            }
            else if(Address.value =="")
            {
                Address.style.border="red solid 2px";
                return;
            }
            else if(Mobile.value =="")
            {
                Mobile.style.border="red solid 2px";
                return;
            }
            else if(Password.value == "")
            {
                Password.style.border="red solid 2px";
                return;
            }
            else if(C_password.value == "")
            {
                C_password.style.border="red solid 2px";
                return;
            }
            else if(Faculty.value == "")
            {
                Faculty.style.border="red solid 2px";
                return;
            }
           
            else if(Tshirt.value == "not")
            {
                alert(Tshirt.value);
                document.getElementById("sizetitle").style.color="red";
                return;
            }
           

        }

        function required_method(elementid)
        {
            
            var element=document.createElement("small");
            var main=document.getElementById("this");
            main.appendChild(element);
            var text=document.createTextNode("This field required");
            element.appendChild(text);
            var attr =document.createAttribute("id");
            attr.value="infom";
            element.setAttributeNode(attr);
        }

        function defaltcolor()
        {   
            document.getElementById("fname").style.border="";
            document.getElementById("lname").style.border="";
            document.getElementById("email").style.border="";
            document.getElementById("address").style.border="";
            document.getElementById("mobile").style.border="";
            document.getElementById("password").style.border="";
            document.getElementById("c_password").style.border="";
            document.getElementById("othermobile").style.border="";
            document.getElementById("faculty").style.border="";
            document.getElementById("sizetitle").style.color="";

        }
    </script>
    <style>
    small
        {
            color: red;
        }
    </style>
    <title>Regisation</title>
</head>
<body>
   
    <div class="container">
        <form action="function/add_new_user.php" method="post">
            <div> 
                <h1 class="text-info mt-4 pb-2">Sign Up Here </h1>
            <div class="form-row">
                <div class="form-group col-md-6"id="this">
                    <label for="Fname" >First Name</label>
                    <input type="text" class="form-control" name="First_Name"  id="fname" onclick="defaltcolor()">
                    <small><?php if(isset($_GET["fname_erro"])){echo "You must provide a first name";} ?></small>
                </div>
                <div class="form-group col-md-6">
                        <label for="Fname">Last Name</label>
                        <input type="text" class="form-control" name="Last_Name" id="lname" onclick="defaltcolor()">
                        <small><?php if(isset($_GET["lname_erro"])){echo "You must provide a last name";} ?></small>
                </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email" >Email</label>
                        <input type="email" class="form-control" name="Email" id="email" onclick="defaltcolor()">
                        <small><?php if(isset($_GET["email_erro"])){echo "Email address is required";} ?></small>
                    </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="Address" >Address</label>
                        <input type="text" class="form-control" name="Address" id="address" onclick="defaltcolor()">
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
                            <input type="text" class="form-control" name="Other_Number"  id="omobile" onclick="defaltcolor()">
                    </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password" >Password</label>
                        <input type="password" class="form-control" name="Password"  id="password" onclick="defaltcolor()">
                        <small><?php if(isset($_GET["password_erro"])){echo "You must enter a password";} ?></small>
                    </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="C_password" >Comfirm Password</label>
                        <input type="password" class="form-control" name="C_password" id="c_password" onclick="defaltcolor()">
                        <small><?php if(isset($_GET["CPassword_erro"])){echo "Check You enterd password is not matching with comfirm password";} ?></small>
                    </div>
                    <div class="form-group col-md-6"></div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="blood" >Blood Group</label>
                        <select name="Blood_group" class="form-control"  id="faculty" >
                            <option value=""onclick="defaltcolor()"></option>
                            <option value="A+" onclick="defaltcolor()">A+</option>
                            <option value="A-" onclick="defaltcolor()">A-</option>
                            <option value="B+" onclick="defaltcolor()">B+</option>
                            <option value="B-" onclick="defaltcolor()">B-</option>
                            <option value="AB+" onclick="defaltcolor()">AB+</option>
                            <option value="AB-" onclick="defaltcolor()">AB-</option>
                            <option value="O+" onclick="defaltcolor()">O+</option>
                            <option value="O-" onclick="defaltcolor()">O-</option>
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
                    <div class="form-group col-md-6" style="padding-left: 160px ;">
                            <input type="submit" onclick="return checkname()" name="Sign" value="Sign Up" class="btn btn-primary">&nbsp&nbsp
                            <input type="button" value="Cancel" class="btn btn-primary ">
                    </div>
            </div>
        </div>
        </form>

    </div>
    <?php
    include("comon/footer.php");
    ?>
</body>
</html>