<?php
    session_start();
    error_reporting(0);
?>

<html>
    <?php include "./msg-alertas-home.php"; ?>    

    <head>
        <?php include "./header.php"; ?>
    </head>

    <body>         
        <div class="top">
            </br>
        </div>

        <div class="middle">
            <div id="home-dashboard">
                <?php include "./home.php"; ?>
            </div> 
        </div>

        <div class="footer">
            </br>
        </div>   
    </body>
</html>