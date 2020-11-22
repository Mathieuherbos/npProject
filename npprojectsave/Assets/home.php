<?php

// not sure if required
include_once "db/db.php";
include_once "db/login_db.php";

// NEEDS TO BE ADDED TO EVERY PAGE OTHER THAN INDEX, LOGIN, SIGNUP
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
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Owl.Carousel-->
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">

    <!-- our css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/d9b3bd9a2e.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Welcome to CRYPTOFOLIO</title>
</head>

<body>
    <style>
    body {
        background-color: #000000;
        
    }

    h1, h2, h3, h4, h5, p {
            color: #FFFFFF;
        }
    
    h1 {
        font-family: "Archivo Black", sans-serif;
    }

    h2, h3, h4, h5, p {
        font-family: "Roboto", sans-serif;
    }

    .lead {
        font-size: 0.7em;
    }
    </style>
    <header>
        <!--Code to include navbar-->
        <?php include("navbar/navbar.php"); ?>
        <style><?php include("navbar/navbar.css"); ?></style>
        <!--END OF Code to include navbar-->
    <header>

    <div class="headerMain">
        <div class="jumbotron jumbotron-fluid">

            <div class="container">
                <div class="heading">
                    <h1>CRYPTOFOLIO</h1>
                    <p class="lead" style="font-size: 1.6em; text-align:center; text-shadow: 3px 4px 7px rgb(31, 29, 29);">Add a crypto to your portfolio and read the last articles</p>
                </div>

                <form action="searchbar.php" method="GET" target="_self">
                    <div class="form-group">
                   
                        <label for="input-group" style="font-size:1.1em;font-style:normal;"><p>Search for a crypto</p></label>
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="e.g. Bitcoin">
                            <div class="input-group-append">
                                <button class="btn btn-danger" name="submit" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                         
                    </div>
                </form>
               
            </div>
        </div>
    </div>
 
   

    <?php if(isset($_SESSION['userN'])){
    echo "<h2><b>Here are the latest articles for you </b><em>" . $_SESSION['userN'] . "</em></h2>";
    }
    ?>
    
    <!-- banner crypto -->
<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script>
<div id="coinmarketcap-widget-marquee" coins="1,1027,825,52,1975,2011,1697" currency="EUR" theme="dark" transparent="false" show-symbol-logo="true"></div>

<div class ="container">
<!-- TEST ARTICLE-->
            <div class="ccpw-container-rss-view ccpw-ticker-rss-view"><ul  id="ccpw-rss-feed-1435">
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://news.bitcoin.com/usdt-towers-over-30-stablecoins-tethers-market-cap-grew-by-2-million-percent-in-just-four-years/">
                        USDT Towers Over 30 Stablecoins- Tether’s Market Cap Grew by 2 Million Percent in Just Four Years</a></h2>
                        <div class="feed-publish-date"><span>Bitcoin News</span> - 22 November 2020, 7:30 am</div>
                        <div class="rss-desc"><a target="__blank" rel="nofollow" href="https://news.bitcoin.com/usdt-towers-over-30-stablecoins-tethers-market-cap-grew-by-2-million-percent-in-just-four-years/">
                        <img src="https://news.bitcoin.com/wp-content/uploads/2020/11/usdt-towers-over-30-stablecoins-tethers-market-cap-grew-by-2-million-percent-in-just-four-years-768x432.jpg " style="max-width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto; width: 100%;"></a>
                        <p class="news-desc">During the last two years since the initial bear market after the 2017 bull run, stablecoins have been extremely popular. Today, statistics show that the market capitalization of all the notable stablecoins today is hovering above the $23.9 billion mark. Out of more than 30 stablecoins in 2020, tether is still a behemoth capturing 76.15%&hellip;<span class="more-text">
                        <a target="__blank" rel="nofollow"  href="https://news.bitcoin.com/usdt-towers-over-30-stablecoins-tethers-market-cap-grew-by-2-million-percent-in-just-four-years/">Read More</a></span></p></div></li><br><br>
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://news.bitcoin.com/wallex-the-rainbow-in-the-european-grey-zone/">
                        Wallex: The Rainbow in The European Grey Zone</a></h2><div class="feed-publish-date"><span>Bitcoin News</span> - 22 November 2020, 6:00 am</div>
                        <div class="rss-desc"><a target="__blank" rel="nofollow" href="https://news.bitcoin.com/wallex-the-rainbow-in-the-european-grey-zone/">
                        <img src="https://news.bitcoin.com/wp-content/uploads/2020/11/photo5312355902537445378-768x432.jpg"style="max-width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto; width: 100%;"></a>
                        <p class="news-desc">The evolution of new digital technologies has created a new shift in the value proposition for financial products and services. Digital asset management based on distributed ledger technology has opened the gates to financial institutions and regulators, with the aim of disrupting this new wave. Nevertheless, it has also opened the door for the creation&hellip;
                        <span class="more-text"><a target="__blank" rel="nofollow"  href="https://news.bitcoin.com/wallex-the-rainbow-in-the-european-grey-zone/">Read More</a></span></p></div></li><br><br>
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://news.bitcoin.com/silk-road-bitcoin-seizure-analytics-firm-claims-tokens-worth-millions-still-outstanding/">
                        Silk Road Bitcoin Seizure: Analytics Firm Claims Tokens Worth Millions Still Outstanding</a></h2>
                        <div class="feed-publish-date"><span>Bitcoin News</span> - 22 November 2020, 2:30 am</div><div class="rss-desc">
                        <a target="__blank" rel="nofollow" href="https://news.bitcoin.com/silk-road-bitcoin-seizure-analytics-firm-claims-tokens-worth-millions-still-outstanding/">
                        <img src="https://news.bitcoin.com/wp-content/uploads/2020/11/d44d4538-905a-436c-9eb0-c791fce92755-768x432.jpeg"style="max-width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto; width: 100%;"></a><p class="news-desc">Analytics firm Coinfirm says the US Department of Justice (DOJ)&#8217;s seizure of digital assets associated with the now-defunct Silk Road left behind tokens worth millions of dollars. According to Coinfirm, there are still valuable balances held on forked addresses originating from that wallet. On November 5, the DOJ announced that a hacker known as Individual&hellip;<span class="more-text">
                        <a target="__blank" rel="nofollow"  href="https://news.bitcoin.com/silk-road-bitcoin-seizure-analytics-firm-claims-tokens-worth-millions-still-outstanding/">Read More</a></span></p></div></li><br><br>
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://news.bitcoin.com/analysts-institutional-investor-interest-fueling-btc-rally-liquidity-crunch-narrative-debunked/">
                        Analysts: Institutional Investor Interest Fueling BTC Rally, Liquidity Crunch Narrative Debunked</a></h2><div class="feed-publish-date"><span>Bitcoin News</span>
                         - 21 November 2020, 11:00 pm</div><div class="rss-desc">
                        <a target="__blank" rel="nofollow" href="https://news.bitcoin.com/analysts-institutional-investor-interest-fueling-btc-rally-liquidity-crunch-narrative-debunked/">
                        <img src="https://news.bitcoin.com/wp-content/uploads/2020/11/76854f0b-67bf-49d2-a81b-0e5f5ebb8f76-768x432.jpeg" style="max-width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto; width: 100%;"></a>
                        <p class="news-desc">Crypto analysts are pushing back against the narrative that the current BTC rally is being fuelled by a liquidity crunch afflicting bitcoin mining pools in China. The liquidity crunch, which is caused by an ongoing regulatory crackdown in that country, has reportedly left miners unable to sell their BTC holdings. Miners Are Selling The analysts&hellip;<span class="more-text"><a target="__blank" rel="nofollow"  href="https://news.bitcoin.com/analysts-institutional-investor-interest-fueling-btc-rally-liquidity-crunch-narrative-debunked/">Read More</a></span></p></div></li><br><br>
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://news.bitcoin.com/paypal-bought-70-of-all-newly-mined-bitcoin-last-month-as-demand-rockets/">
                        Paypal Bought 70% of All Newly Mined Bitcoin Last Month as Demand Rockets</a></h2><div class="feed-publish-date"><span>Bitcoin News</span> - 21 November 2020, 9:10 pm</div>
                        <div class="rss-desc"><a target="__blank" rel="nofollow" href="https://news.bitcoin.com/paypal-bought-70-of-all-newly-mined-bitcoin-last-month-as-demand-rockets/">
                        <img src="https://news.bitcoin.com/wp-content/uploads/2020/11/paypal-bought-70-of-all-newly-mined-bitcoin-last-month-as-demand-rockets-768x432.jpg" style="max-width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto; width: 100%;"></a>
                        <p class="news-desc">Paypal bought up to 70% of all the newly mined bitcoin since the payments giant started offering cryptocurrency services four weeks ago. Now that&#8217;s according to estimates by hedge fund manager Pantera Capital, as revealed in its latest monthly blockchain letter. Together with Square&#8217;s Cash App, the two companies are buying more than 100% of&hellip;<span class="more-text"><a target="__blank" rel="nofollow"  href="https://news.bitcoin.com/paypal-bought-70-of-all-newly-mined-bitcoin-last-month-as-demand-rockets/">Read More</a></span></p></div></li><br><br>
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/chainalysis-already-3700000-bitcoin-lost-forever/">
                        Chainalysis: Already 3,700,000 Bitcoin lost forever</a></h2><div class="feed-publish-date"><span>The Bitcoin News – Bitcoin and Blockchain News</span> - 21 November 2020, 6:40 pm</div>
                        <div class="rss-desc"><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/chainalysis-already-3700000-bitcoin-lost-forever/">
                        <img src="https://thebitcoinnews.com/wp-content/uploads/2020/11/Bitcoin-lost-forever.jpg" style="max-width: 100%; height: auto;"></a>
                        <p class="news-desc">The amount of Bitcoin is known to be limited. But how big is the percentage of lost BTC? Chainalysis gets to the bottom of this question and sees the increased number of institutional investors as a price driver. There are many myths about lost bitcoins. The blockchain analysis company Chainalysis has come to a highly&hellip;<span class="more-text"><a target="__blank"  href="https://thebitcoinnews.com/chainalysis-already-3700000-bitcoin-lost-forever/">Read More</a></span></p></div></li><br><br>
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/how-institutional-investors-legitimize-bitcoin/">
                        How institutional investors legitimize Bitcoin</a></h2><div class="feed-publish-date"><span>The Bitcoin News – Bitcoin and Blockchain News</span> - 21 November 2020, 8:13 am</div>
                        <div class="rss-desc"><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/how-institutional-investors-legitimize-bitcoin/">
                        <img src="https://thebitcoinnews.com/wp-content/uploads/2020/11/How-institutional-investors-legitimize-Bitcoin.jpg" style="max-width: 100%; height: auto;"></a>
                        <p class="news-desc">Bitcoin is maturing into a legitimate financial product that is finding its way into more and more traditional portfolios. Now hedge fund legend Ray Dalio is also expressing interest in BTC. They are the really big ones. Paul Tudor Jones, Stanley Druckermiller and now even Ray Dalio is on the way. While the former have&hellip;<span class="more-text"><a target="__blank"  href="https://thebitcoinnews.com/how-institutional-investors-legitimize-bitcoin/">Read More</a></span></p></div></li><br><br>
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/vpnmentor-exposes-bitcoin-fraud-for-facebook-users/">
                        vpnMentor exposes Bitcoin fraud for Facebook users</a></h2><div class="feed-publish-date"><span>The Bitcoin News – Bitcoin and Blockchain News</span> - 19 November 2020, 6:27 pm</div>
                        <div class="rss-desc"><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/vpnmentor-exposes-bitcoin-fraud-for-facebook-users/">
                        <img src="https://thebitcoinnews.com/wp-content/uploads/2020/11/vpnMentor.jpg" style="max-width: 100%; height: auto;"></a>
                        <p class="news-desc">vpnMentor uncovered a phishing operation targeting hundreds of thousands of Facebook users worldwide and targeting Bitcoin fraud Cyber criminals have stolen Facebook passwords and lured friends of their victims with posts related to them on websites promoting a Bitcoin scam. Security researchers from vpnMentor revealed that they made their entire operations available in an unsecured&hellip;<span class="more-text"><a target="__blank"  href="https://thebitcoinnews.com/vpnmentor-exposes-bitcoin-fraud-for-facebook-users/">Read More</a></span></p></div></li><br><br>
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/a-detailed-breakdown-of-realios-platform-dex-issuance-network/">
                        A detailed breakdown of Realio’s Platform, DEX &amp; Issuance Network</a></h2><div class="feed-publish-date"><span>The Bitcoin News – Bitcoin and Blockchain News</span> - 19 November 2020, 3:56 pm</div>
                        <div class="rss-desc"><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/a-detailed-breakdown-of-realios-platform-dex-issuance-network/">
                        <img src="https://thebitcoinnews.com/wp-content/uploads/2020/11/Realio.jpg" style="max-width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto; width: 100%;"></a>
                        <p class="news-desc">Since 2019, the real estate market has grown by $700 million. There are two huge reasons behind this increase &#8211;&#160; Real estate is considered a safe investment Almost every business is connected to real estate. While several projects are currently creating products that integrate blockchain technology and the real estate market, Realio manages to stand&hellip;<span class="more-text"><a target="__blank"  href="https://thebitcoinnews.com/a-detailed-breakdown-of-realios-platform-dex-issuance-network/">Read More</a></span></p></div></li><br><br>
                    <li class="ccpw-news">
                        <h2 class=ccpw-news-link><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/bitconnect-promoter-faces-a-long-prison-sentence/">
                        BitConnect promoter faces a long prison sentence</a></h2><div class="feed-publish-date"><span>The Bitcoin News – Bitcoin and Blockchain News</span> - 18 November 2020, 2:29 pm</div>
                        <div class="rss-desc"><a target="__blank" rel="nofollow" href="https://thebitcoinnews.com/bitconnect-promoter-faces-a-long-prison-sentence/">
                        <img src="https://thebitcoinnews.com/wp-content/uploads/2020/11/BitConnect.jpg" style="max-width: 100%; height: auto; "></a>
                        <p class="news-desc">A leader in the global crypto pyramid scheme BitConnect faces years in prison. A court ruling is expected in February 2021. John Bigatton, the former chief scammer of the Australian branch of the BitConnect pyramid scheme, may be wandering behind Swedish curtains for a long time. As the Australian Securities &#038; Investments Commission (ASIC) published&hellip;<span class="more-text"><a target="__blank"  href="https://thebitcoinnews.com/bitconnect-promoter-faces-a-long-prison-sentence/">Read More</a></span></p></div></li> <br><br></ul></div><style type='text/css'>
                        .tickercontainer #ccpw-rss-feed-1435 {background-color:#000000;}
                        .tickercontainer #ccpw-rss-feed-1435 .ccpw-news a{color:#000;}
                        .ccpw-news-ticker .tickercontainer li:after {color: #FFFFFF;}
                        .ccpw-ticker-rss-view #ccpw-rss-feed-1435{background-color:#000000;;}
                        .ccpw-ticker-rss-view #ccpw-rss-feed-1435 .ccpw-news .feed-publish-date{<color: #FFFFFF;}
                        .ccpw-ticker-rss-view #ccpw-rss-feed-1435	.ccpw-news .rss-desc p.news-desc {color:#FFFFFF;}
                        .ccpw-ticker-rss-view #ccpw-rss-feed-1435	.ccpw-news h2.ccpw-news-link a{color:#FFFFFF;}
                        .rss-desc &gt; a {
            position: inherit !important;
                overflow: inherit !important;
                display: block;
            }</style>
            </div></section></div>
</div>









    </div>

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