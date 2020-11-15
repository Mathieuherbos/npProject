  
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/paw.png" type="image/png">
    <title>LOGIN</title>
    <link rel="stylesheet"      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>
    <body>
        <section id="cover" class="min-vh-100">
            <div id="cover-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 mx-auto text-center form p-4">
                            <h1 class="title">SIGN IN</h1>
                            <div class="px-2 signinform">
                                <form action="db/login_db.php" method="post">
                                    <div class="form-group usernameSi">
                                        <p>User name</p>
                                    </div>
                                <input class="form-control mb-3" type="text" name="user" placeholder="Shinee321">
                                    <div class="passwordSi">
                                        <p>Password</p>
                                    </div>
                                <input class="form-control mb-3" type="password" name="pw" placeholder="********">
                                <br>
                                <button type="submit" name="submit" class="btn btn-danger gobtn"><b>GO ! </b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </body>
</html>
    