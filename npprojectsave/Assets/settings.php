<?php
session_start();
?>

<!-- for header -->
<?php 
if(!isset($_SESSION['userN'])){
    // once session expires, go back to landing page
    header("location: ../index.html");
    // we can add other options here
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/paw.png" type="image/png">
        <!-- bootstrap link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/d9b3bd9a2e.js" crossorigin="anonymous"></script>
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
        <title>CRYPTOFOLIO your settings</title>
    </head>
    <body>
        <header>
            <!--Code to include navbar-->
            <?php include("navbar/navbar.php"); ?>
            <style><?php include("navbar/navbar.css"); ?></style>
            <!--END OF Code to include navbar-->
        <header>

        <style>
            .faq {
                font-family: "Archivo Black", sans-serif;
                text-shadow: 2px 2px 5px rgba(150, 150, 150, 0.28);
                text-align: center;
                font-size: 4em;    
            }

             body {
        background-color: #000000;
        color: #FFFFFF;
    }

    h3 {
        color: #FFFFFF;
    }

            .content {
                font-family: "Roboto", sans-serif;
                text-align: center;    
            }

            #welcome {
                padding: 1em;
            }

            h5 {
                font-weight: bold;
            }

            h4 {
                margin: 2em;
            }

        </style>

      
        
        <!--Code to include footer-->
        <?php include("footer/footer.php"); ?>
        <style><?php include("footer/footer.css"); ?></style>
        <!--END OF Code to include footer-->
    </body>
</html>