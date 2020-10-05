<?php
include("comon/navigation.php");
include("db/dbconn.php");
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
    <title>Event</title>
</head>
<body>
    <?php 
        $query="SELECT * FROM  post_table ";
        $posts=mysqli_query($conn,$query);
        while($post=mysqli_fetch_assoc($posts))
        {
            echo"<div class='container-fluid mt-3'>
                <div class='card-deck'>
                    <div class='card bg-dark' style='color:blanchedalmond;max-width:22rem;'>
                         <img src= event_img/$post[Image]  class='card-img-top'>
                        <div class='card-body'>
                            <h4 class='card-title' >$post[Title]</h4>
                            <p>$post[Message]</p>
                        </div>
                        <div class='card-footer'>
                            <input type=button value=Interest class= 'btn btn-primary'>
                        </div>
        
                    </div>
                </div>   
            </div>";
        }  
    ?>
    
    <!--first deck-->
    <div class="container-fluid mt-3">
        <div class="card-deck">
            <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                 <img src="img/donate1.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Matara</h4>
                    <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital </p>
                </div>
                <div class="card-footer">
                    <input type="button" value="Interest" class="btn btn-primary">
                </div>

            </div>
            <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                    <img src="img/donate2.jpg" alt="" class="card-img-top">
                   <div class="card-body">
                       <h4 class="card-title">Maharagama</h4>
                       <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in yoth center </p>
                   </div>
                   <div class="card-footer">
                       <input type="button" value="Interest" class="btn btn-primary">
                   </div>
   
               </div>
               <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                    <img src="img/6.jpg" alt="" class="card-img-top">
                   <div class="card-body">
                       <h4 class="card-title">Kurunagala</h4>
                       <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital</p>
                   </div>
                   <div class="card-footer">
                       <input type="button" value="Interest" class="btn btn-primary">
                   </div>
   
               </div>
               <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                    <img src="img/3.jpg" alt="" class="card-img-top">
                   <div class="card-body">
                       <h4 class="card-title">Ampara</h4>
                       <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital </p>
                   </div>
                   <div class="card-footer">
                       <input type="button" value="Interest" class="btn btn-primary">
                   </div>
   
               </div>
              
        </div>

    </div>
    <!--end of first deck-->

        <!--second deck-->
        <div class="container-fluid mt-3">
                <div class="card-deck">
                    <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                         <img src="img/1.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Hambanthota</h4>
                            <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital </p>
                        </div>
                        <div class="card-footer">
                            <input type="button" value="Interest" class="btn btn-primary">
                        </div>
        
                    </div>
                    <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                            <img src="img/2.jpg" alt="" class="card-img-top">
                           <div class="card-body">
                               <h4 class="card-title">Bandarawela</h4>
                               <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital</p>
                           </div>
                           <div class="card-footer">
                               <input type="button" value="Interest" class="btn btn-primary">
                           </div>
           
                       </div>
                       <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                            <img src="img/6.jpg" alt="" class="card-img-top">
                           <div class="card-body">
                               <h4 class="card-title">Jaffna</h4>
                               <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital</p>
                           </div>
                           <div class="card-footer">
                               <input type="button" value="Interest" class="btn btn-primary">
                           </div>
           
                       </div>
                       <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                            <img src="img/3.jpg" alt="" class="card-img-top">
                           <div class="card-body">
                               <h4 class="card-title">colombo</h4>
                               <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital</p>
                           </div>
                           <div class="card-footer">
                               <input type="button" value="Interest" class="btn btn-primary">
                           </div>
           
                       </div>
                      
                </div>
        
            </div>
            <!--end of second deck-->

            <!--third deck-->
    <div class="container-fluid mt-3">
            <div class="card-deck">
                <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                     <img src="img/donate1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Kamburupitiya</h4>
                        <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital</p>
                    </div>
                    <div class="card-footer">
                        <input type="button" value="Interest" class="btn btn-primary">
                    </div>
    
                </div>
                <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                        <img src="img/2.jpg" alt="" class="card-img-top">
                       <div class="card-body">
                           <h4 class="card-title">Makandura</h4>
                           <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital</p>
                       </div>
                       <div class="card-footer">
                           <input type="button" value="Interest" class="btn btn-primary">
                       </div>
       
                   </div>
                   <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                        <img src="img/6.jpg" alt="" class="card-img-top">
                       <div class="card-body">
                           <h4 class="card-title">Matale</h4>
                           <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital </p>
                       </div>
                       <div class="card-footer">
                           <input type="button" value="Interest" class="btn btn-primary">
                       </div>
       
                   </div>
                   <div class="card bg-dark" style="color: blanchedalmond;max-width: 22rem;">
                        <img src="img/3.jpg" alt="" class="card-img-top">
                       <div class="card-body">
                           <h4 class="card-title">Hakmana</h4>
                           <p>This event well be held at 7.30 a.m to 5.30 p.m on 2020-10-03 in main hospital</p>
                       </div>
                       <div class="card-footer">
                           <input type="button" value="Interest" class="btn btn-primary">
                       </div>
       
                   </div>
                  
            </div>
    
        </div>
        <!--end of third deck-->
</body>
</html>