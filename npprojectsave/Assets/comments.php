<?php
    $db = new PDO ('mysql:host=sql100.epizy.com;port=3306;dbname=epiz_26591763_catflix','epiz_26591763','nNU2fD6vzKC', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    include "db/comments_db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/paw.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="css/streaming.css">

</head>
<body>
<style>
    .comments {
        text-align: center;
        color: #FFFFFF !important;
    }

    .com {
        font-family: "Archivo Black", sans-serif;
    }

    .comsection {
        border: solid 1px #9E9494; border-style: none none solid solid;
        border-radius: 15px;
    }

    

</style>
    <div class="comments" style="margin-top:13vh;">
    <form method="post">
        <label for="comment"><h3 class="com">Comment</h3></label> <br>
        <textarea placeholder="Remember, be nice!" name="comment" id="commentText" cols="30" rows="3" <?php echo $disabled ?>></textarea><br>
        <button type="submit" class="btn btn-danger" id="commentButton" <?php echo $disabled ?>>Submit </button>
    </form>
    <?php 
        if(isset($message)){
            echo $message;
        }
    ?>

<div>
        <!-- Printing comment information from query fetch -->
        <?php while($a = $content->fetch()){ ?>
            <hr>
            
                <div class="comsection">
                    <div class="space">
                
                    <p class="comUser" style="color:#FFFFFF;"><b><?= $a['userName'] ?></b></p>
                    <p class="comDate" style="font-size:0.8em;"><i><?= $a['created'] ?></i></p>
                    </div>
                
                <!-- can replace with $_SESSION['userN'] -->
                <p class="comBody"><?= $a['body'] ?></p>            
                </div>
            
        <?php } ?>

    </div>

</div>
    

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