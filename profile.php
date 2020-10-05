<?php
    session_start();
    include("db/dbconn.php");
    $query="SELECT * FROM donators WHERE UserID=$_SESSION[account_id]";
    $results=mysqli_query($conn,$query);
    $user=mysqli_fetch_assoc($results);
?>
<?php
    if(isset($_POST["upload"]))
    {
        if(isset($user["image_dir"]))
        {
            unlink("profile/$user[image_dir]");
        }
        $name=$_FILES["image_input"]["name"];
        $newName=imageNameGeng($name);
        $type=$_FILES["image_input"]["type"];
        $temp_name=$_FILES["image_input"]["tmp_name"];
        $save='profile/';
        $query="UPDATE donators SET image_dir='{$newName}' WHERE UserID=$_SESSION[account_id]";
        $info=mysqli_query($conn,$query);
        if($info)
        {
            $Uploaded=move_uploaded_file($temp_name,$save.$newName);
            $query1="SELECT*FROM donators WHERE UserID=$_SESSION[account_id]";
            $result=mysqli_query($conn,$query1);
            $profile_pic=mysqli_fetch_assoc($result);
            header('Location:profile.php');
        }
        else
        {
            echo "no uploaded files";
        }

    }
    function imageNameGeng($name)
    {   
        $name="";
        $count=random_int(0,100000000);
        $Nname=$name.strval($count).".jpg";
        return $Nname;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title><?php echo  "$_SESSION[account_fname] $_SESSION[account_lname]"; ?></title>
    <style>
        img
        {
            width: 100%;
        }
        body
        {
            padding-top:20px;
            background-color: #f1f1f1;
        }
        .profile-card
        {
            padding-bottom: 150px;
            width: 500px;
            margin: auto ;
            background: #fff;
            box-shadow: 0px 1px 10px 1px #000;
        }
        p img 
        {
            width:25px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="profile-card">
            <div class="image-container">
                <div class="round-image">
                    <?php
                    echo "<img src=profile/$user[image_dir] height=400px  width=400px>";
                    ?>
                <div> 
            </div>
            <div class="image-upload">
                    <form action="profile.php" method="post" enctype="multipart/form-data">
                        <h4>Choose an image</h4>
                        <input type="file" name="image_input" id="">
                        <button type="submit"name="upload" value="upload">Upload</button>
                    </form>
            </div>
            <div class="titile"> <h2><?php echo  "$_SESSION[account_fname] $_SESSION[account_lname]"; ?></h2></div>
            <div class="container">
                <p><img src="img/place.png">Home town : <?php echo " ".$user["Addres"]; ?></p>
                <p><img src="img/email.png">Email :<?php echo " ".$user["Email"]; ?></p>
                <p><img src="img/call.png">Mobile :<?php echo " ".$user["Mobile"]; ?></p>
                <p><img src="img/bloodgroup.png">Blood Group :<?php echo " ".$user["Bloodgroup"]; ?></p>
                <dl>
                    <dt><img src="img/report.png"style="width:25px;">&nbsp&nbspAbout Your blood</dt>
                    <dd>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo " ".$user["Report"]; ?></dd>
                </dl>
                
            </div>
            <p style="float:right; margin-top: 100px;margin-right: 2px;"><img src="img/settings.png" alt=""><a href="function/user_account_setting.php" style="text-decoration:none;">Account Setting</a></p>
        </div>
    </div>
</body>
</html>