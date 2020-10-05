
<?php
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
    <style>
   
    </style>
    <title>Home</title>
</head>
<body>
        <div class="container">
            <div id="controller" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#controller" data-slide-to="0"></li>
                    <li data-target="#controller" data-slide-to="1"></li>
                    <li data-target="#controller" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/b1.jpg" alt="First slide">
                            <div class="carousel-caption">
                                <h2>Give blood and save life</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/b2.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/b3.jpg" alt="Third slide">
                        </div>
                </div>
                <a href="#controller" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                <a href="#controller" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
            </div>
        </div>
    <?php
    include("comon/footer.php");
    ?>
       
</body>
</html>