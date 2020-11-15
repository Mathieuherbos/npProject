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
        <!-- animate -->
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
        <title>CRYPTOFOLIO FAQ</title>
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

        <h1 class="animate__animated animate__fadeInDown faq"><strong>FAQ</strong></h1>
        
        <div class="content">
                <h3 id="welcome">Welcome to <b>Cryptofolio!</b></h3>

                <h4>These are the frequently asked questions</h4>

                <h5>What is cryptocurrencies ?</h5>

                <p>A cryptocurrency (or crypto currency) is a digital asset designed to work as a medium of exchange wherein individual coin ownership records are stored in a ledger existing in a form of computerized database using strong cryptography to secure transaction records, to control the creation of additional coins, and to verify the transfer of coin ownership. It typically does not exist in physical form (like paper money) and is typically not issued by a central authority. Cryptocurrencies typically use decentralized control as opposed to centralized digital currency and central banking systems. When a cryptocurrency is minted or created prior to issuance or issued by a single issuer, it is generally considered centralized. When implemented with decentralized control, each cryptocurrency works through distributed ledger technology, typically a blockchain, that serves as a public financial transaction database.</p>

                <h5>What is the purpose of the site ?</h5>
                
                <p>See the last news about cryptocurrencies, and take care about how your cryptos are going with the live update graphics.</p>

                

                <h5>Does cryptofolio have a mobile version</h5>
                
                <p>Yes, of course it can run properly on mobile.</p>
        </div>
        
        <!--Code to include footer-->
        <?php include("footer/footer.php"); ?>
        <style><?php include("footer/footer.css"); ?></style>
        <!--END OF Code to include footer-->
    </body>
</html>