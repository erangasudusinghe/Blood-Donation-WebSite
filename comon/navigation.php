<html lang="en">
<head>
<style>
     #userlogin
    {
        padding-top:6px;
        display:inline-block;
        text-decoration:none;
        color: rgba(182, 178, 178, 0.87);
    }
    a{  
        text-decoration:none;   
     }
    button
    {
        border-start-end-radius: 10px;
    }
    .rounded-image
    {
        width: 5px;
        display:inline;
    }
    .rounded-image img
    {
        border-radius: 100px;
    }
</style>
</head>
<body>
    
<!--navigation bar-->
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" >
            <a href="" class="navbar-brand"><img src="img\bloodicon.png">&nbsp&nbspBlood Bank</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#droplist" ><span class="navbar-toggler-icon" ></span></button>
            <div class="collapse navbar-collapse justify-content-center" id="droplist" >
                    <ul class="navbar-nav">
                            <li class="nav-item"><a href="index.php"  target="_self"class="nav-link">Home&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                            <li class="nav-item"><a href="event.php"  target="_self"class="nav-link">Donation Events&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                            <li class="nav-item"><a href="registation.php" target="_self" class="nav-link">Registation&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Misson&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                            <li class="nav-item "><a href="" class="nav-link" data-toggle="modal" data-target="#openmodal">Login&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                            <li class="nav-item "><a href="" class="nav-link">Help&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                            <li class="nav-item "><a href="" class=""><form action="function/logout.php">
                                                                                 <?php
                                                                                    session_start();
                                                                                    if(isset($_SESSION["account_fname"]) && isset($_SESSION["account_lname"])){
                                                                                    include("db/dbconn.php");
                                                                                    $query="SELECT * FROM donators WHERE UserID=$_SESSION[account_id]";
                                                                                    $result=mysqli_query($conn,$query);
                                                                                    $user=mysqli_fetch_assoc($result);
                                                                                    if(isset($user['image_dir']))
                                                                                        {
                                                                                            $profile_icon=$user['image_dir'];
                                                                                        }
                                                                                    else
                                                                                        {
                                                                                            $profile_icon="user.png";
                                                                                        }     
                                                                                    if(isset($_SESSION["account_fname"]) && isset($_SESSION["account_lname"]))
                                                                                    {
                                                                                        if(isset($_SESSION["admin"]))
                                                                                            {
                                                                                                echo "<div id=userlogin><a href=profile.php><div class=rounded-image><img src=profile/$profile_icon width=32px height=32px></div></a>&nbsp&nbsp&nbsp $_SESSION[account_fname] $_SESSION[account_lname]&nbsp&nbsp&nbsp</div>";
                                                                                                echo "<a href= donators_info.php  id=userlogin>Admin settings</a>";
                                                                                                echo "&nbsp&nbsp&nbsp<button type= submit >Log Out</button>";
                                                                                            }
                                                                                        else
                                                                                            {
                                                                                                echo "<div id=userlogin><a href=profile.php><div class=rounded-image><img src=profile/$profile_icon width=32px height=32px></div></a>&nbsp&nbsp&nbsp$_SESSION[account_fname] $_SESSION[account_lname]&nbsp&nbsp&nbsp<button type= submit>Log Out</button></div>";
                                                                                            }
                                                                                                
                                                                                    }
                                                                                }
                                                                                    ?>
                                                                                </form></a></li>
                        </ul>
            </div>
        </nav>
 <!-- end of  navigation bar-->
<!--login modal-->
        <div class="modal fade" tabindex="-1" role="dialog" id="openmodal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="function/login.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" area-lable="close"><span area-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                            <label for="username">User Name &nbsp</label>
                            <input type="text" name="user_name"><br><br>
                            <label for="password" style="padding-left:2px;">Password  &nbsp&nbsp&nbsp</label>
                            <input type="password" name="user_password"><br><br>
                            <label for="username">Login Type&nbsp&nbsp</label>
                            <select name="user_type">
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                            <button  type="submit" class="btn btn-dark" name="login">Login</button>
                        </div>
                        </form>
                    </div>
        
                </div>
            </div>
        
 <!-- end of login modal-->
 </body>
</html>