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
        <title>your folio</title>
        <link rel="icon" href="assets/images/paw.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    </head>

    <body>

            <header>
                <!--Code to include navbar-->
                <?php include("navbar/navbar.php"); ?>
                <style><?php include("navbar/navbar.css"); ?></style>
                <!--END OF Code to include navbar-->
            <header>

        <style>
            h1 {
    text-align: center;
    font-family: "Archivo Black", sans-serif;
    padding:1.2em;
    text-shadow: 0px 4px 7px rgb(31, 29, 29);
            }

            p, h5 {
                font-family: "Roboto", sans-serif;
                padding-left: 5vw;
                padding-right: 5vw;
            
            }
    
    h4 {
        font-family: "Archivo Black", sans-serif !important;
        padding-left: 5vw;
        padding-top: 2vw;
        font-size: 0.9em;
        color: #DE4646;
        
    }

    .bgcolor {
        background-color: rgb(255, 255, 255, 0.1);
        border-radius: 20px;
        margin-top: 1.7em;
       
    }

    #rating {
        padding-bottom: 2em;
    }

    

   

    #link1, #link2, #link3{
    padding: none;
    margin: none;
    height: 0em!important;
    text-align: left;
    
    }
        </style>

        <div class="container streaming" style="margin-top:5vh;" >
            <?php
                $bdd = new PDO ('mysql:host=sql100.epizy.com;port=3306;dbname=epiz_26591763_catflix','epiz_26591763','nNU2fD6vzKC', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                if(isset($_GET['id'])) {
                    $getid = intval($_GET['id']);
                    $reponse = $bdd->prepare('SELECT * FROM youtubeinfos WHERE id = ?');
                    $reponse->execute(array($getid));
                    $datas = $reponse->fetch();
            ?>
            <iframe class="responsive-iframe" src="<?php echo ($datas['link']); ?>">
            </iframe>              
        </div>

        <div class="container-fluid" id="description" style="padding-left:10vw !important; padding-right:10vw !important;">
            <div class="col-sm bgcolor">    
                    <h1 id="title"  class="animate__animated animate__fadeIn"><?php echo ($datas['title']); ?></h2>
                    <div style="border: solid 1px #9E9494; border-style: none none solid solid; border-radius: 15px; padding-top:1em;">
                    <p><?php echo ($datas['description']); ?></p>
                    </div>
                    <div id="type"><h4><?php echo ($datas['types']); ?></h5></div>
                    <div id="duration"><h5>Duration : <i><?php echo ($datas['duration']); ?></i></h5></div>
                    <div id="release"><h5>Release date : <i><?php echo ($datas['releaseDate']); ?></i></h5></div>
                    <div id="rating"><h5>Rating : <i><?php echo ($datas['rating']); ?></i></h5></div>
                
            </div>
        </div>
        <?php 
            }
        ?>

        <?php include_once "comments.php" ?>

             <!--Code to include footer-->
        <?php include("footer/footer.php"); ?>
        <style><?php include("footer/footer.css"); ?></style>

    </body>
</html>