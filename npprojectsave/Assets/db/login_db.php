<?php

// if login details were submiteed
// if (isset($_POST['login-submit'])){
    if($_SERVER['REQUEST_METHOD'] == "POST") {
    require 'db.php';
    $user =  mysqli_real_escape_string($connection, $_POST['user']);
    $pw =  mysqli_real_escape_string($connection, $_POST['pw']);
    
    //checking if fields are empty
    if (empty($user) || empty($pw)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    
    else {
        // allows user to login with username or email
        $sql = "SELECT * FROM userdb WHERE userName=? OR email=?;";
        // $sql = "SELECT * FROM userdb WHERE userName=?;";
        $stmt = mysqli_stmt_init($connection);
        // check if there is a connection error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $user, $user);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            //$row = mysqli_fetch_assoc($results)
            if ($row = mysqli_fetch_assoc($results)){
                $pwCheck = password_verify($pw, $row['password']);
                if ($pwCheck == false) {
                    header("Location: ../login.php?error=wrongpassword");
                    // $pwMessage = "Password incorrect";
                    exit();
                }
                elseif ($pwCheck == true) {
                    // start the session
                    session_start();
                    $_SESSION['userN'] = $row['userName'];
                    $_SESSION['userId'] = $row['ID'];
                    header("Location: ../home.php");

                }
                else {
                    header("Location: ../login.php?error=codingerror");
                    exit();
                }
            }
            else {
                header("Location: ../login.php?error=nouserfound");
                // $userMessage= "Username not found";
                exit();
            }
        }
    }

}
// else {
//     header("Location: login.php?SUCCESS");
//     exit();
// }