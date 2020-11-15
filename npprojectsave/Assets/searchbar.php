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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search result</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- our css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/d9b3bd9a2e.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body>
<header>
        <!--Code to include navbar-->
        <?php include_once("navbar/navbar.php"); ?>
        <style><?php include("navbar/navbar.css"); ?></style>
        <!--END OF Code to include navbar-->

<style>

.image-list-small {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0 auto;
    text-align: center;
    max-width: 1170px;
    padding: 0;
  }

 body {
        background-color: #000000;
        
    }

    h3 {
        color: #FFFFFF;
    }

@media (max-width: 455px) {
    .image-list-small {
        text-align: center;
       
        }
    }

@media only screen and (min-width: 1366px) {
    .image-list-small li {
      display: inline-block;
      width: 25% !important;
      margin: 0 40px 70px !important;
    }

    .image-list-small li > a {
      display: block;
      text-decoration: none;
      background-size: cover;
      background-repeat: no-repeat;
      height: 14em !important;
      margin: 0;
      padding: 0;
      
      box-shadow: -11px 10px 33px -16px rgba(26,24,24,1);
    }
    
  }

  .image-list-small li {
    display: inline-block;
    width: 15em;
    margin: 0 12px 30px;
  }

  
.image-list-small li > a {
    display: block;
    text-decoration: none;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    height: 11.5em;
    margin: 0;
    padding: 0;
    
    box-shadow: -5px 14px 21px -16px rgba(26,24,24,1);
  }


  .image-list-small .details {
    margin-top: 13px;
  }

   
.image-list-small .details h3 {
    display: block;
    font-size: 1.2em;
    margin: 0 0 3px 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .image-list-small .details h3 a {
    color: #FFFFFF;
    text-decoration: none;
  }
  .image-list-small .details .image-author {
    display: block;
    color: #717171;
    font-size: 11px;
    font-weight: normal;
    margin: 0;
  }

  .details {
      text-align: center;
      font-family: 'Roboto', sans-serif;

  }


  body {
    font-family: 'Roboto', sans-serif;

  }

#movieThumbnail {
    transition: transform .5s ease;
}

#movieThumbnail:hover {
    transform: scale(1.1);
  }

#message {
    font-size: 3vw;
    text-align: center;
    padding-bottom: 2em;
    padding-top: 0.7em;
}



#grumpy{
    position: relative;
    bottom: 4em;
}

#link1, #link2, #link3{
    padding: none;
    margin: none;
    height: 0em!important;
    text-align: left;
}

</style>
</header>
<?php

       
    
     //SE CONNECTER A LA DB test

        $bdd = new PDO ('mysql:host=localhost;port=3306;dbname=npproject','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
            if(isset($_GET['search']) && $_GET['search'] == "")
                {   
                    echo '<h3 id="message">Nope! Couldn\'t find your crypto, try again<h3>';
                } else if (isset($_GET['search']) && $_GET['search'] != "")
                {
                //proceed as normal, do the query
                    $string = $_GET["search"];
                    $query = "SELECT * FROM youtubeinfos WHERE title LIKE '%".$string."%'";
                    $sqlrequest = $bdd->prepare($query);
                    
                //execute first request
                    $sqlrequest -> execute();
                        echo '<h3 id="message"><div class="animate__animated animate__tada"><b>Perfect!</b></div> You\'ve found it</h3><ul class="image-list-small">';
                        while ($row = $sqlrequest->fetch()) 
                        {
                        echo' <li>
                          <a id="movieThumbnail" alt="'.$row['alt'].'"href="streaming.php?id='.$row['id'].'" 
                          style="background-image: url(/assets/'.$row['images'].');"></a>
                          <div class="details">
                            <h3><a href="#"><b>'.$row['title'].'</b></a></h3>
                            
                          </div>
                      </li>';
                            
                        } 
                    
                    $sqlrequest->closeCursor(); // Termine le traitement de la requête
 
                }
            
            
            
 
?>
</ul>

 <!--Code to include footer-->
     <?php include("footer/footer.php"); ?>
    <style><?php include("footer/footer.css"); ?></style>
<!--END OF Code to include footer-->

<!-- bootstrap links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>