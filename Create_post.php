<?php
    include("db/dbconn.php");
    if(isset($_POST["post"]))
    {
        $query1="SELECT Post_id FROM  post_table ";
        $result=mysqli_query($conn,$query1);
        if(mysqli_num_rows( $result)>0)
        {   $Post_id=1;
            while($Post_id<=mysqli_num_rows( $result))
            {       
                 $Post_id=$Post_id+1;  
            }   
        }
        else
        {
            $Post_id=1;
        }
        $Title=$_POST["title"];
        $Image=$_FILES['image']["name"];
        $save="event_img/";
        $saved=move_uploaded_file($_FILES['image']["tmp_name"],$save.$Image);
        $Message=$_POST["Message"];
        $query="INSERT INTO post_table(Post_id,Title,Image,Message)VALUES( '{$Post_id}', '{$Title}', '{$Image}', '{$Message}')";
        $report=mysqli_query($conn,$query);
        
    }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Post an event</title>
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
        .post-card
        {
            padding-bottom: 40px;
            width: 500px;
            margin: auto ;
            background: #fff;
            box-shadow: 0px 1px 10px 1px #000;
        }
        .container-fluid button
        {
            padding: 5px 30px;
            margin-left:170px ;
            margin-top:30px ;
        }
        .m4
        {
            color:red;
            font-size:20px;
            padding-top:10px;
        }
        .m3
        {
            color:green;
            font-size:20px;
            padding-top:10px;
        }
      
    </style>
</head>
<body>
        <form action="Create_post.php" method="post" enctype="multipart/form-data">
            <div class="container-fluid post-card">
                <h2>Create a post</h2>
                <label for="">Title</label><br>
                <input type="text" name="title" id="" class="form-control"><br>
                <label for="">Photo </label><br>
                <input type="file" name="image" id="" class="form-control"><br>
                <label for="">Message</label><br>
                <textarea name="Message" id="" cols="30" rows="10" class="form-control">Type what you want text</textarea><br>
                <button type="submit" name="post" value="posted"  class="btn  btn-md btn-primary">Post</button>
                <?php 
                if(isset($_POST["post"])){ 
                    if($report)
                    {
                        echo "<h3 align=center class=m3 >Event is posted<h3>";
                    }
                    else
                    {
                        echo "<h3 align=center class=m4 >Event posting failed<h3>";
                    }
                }
                ?>
            </div>
        </form>
</body>
</html>