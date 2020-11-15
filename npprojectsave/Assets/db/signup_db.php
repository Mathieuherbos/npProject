<?php

include_once 'db.php';

//new PDO ('mysql:host=sql100.epizy.com;port=3306;dbname=epiz_26591763_catflix','epiz_26591763','nNU2fD6vzKC', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
$lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
$user = mysqli_real_escape_string($connection, $_POST['user']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$pw = mysqli_real_escape_string($connection, $_POST['pw']);
$pwConf = mysqli_real_escape_string($connection, $_POST['confirm_pw']);
//$premium = mysqli_real_escape_string($connection, $_POST['inlineRadioOptions']);

if (isset($_POST['premium'])){
    $premium = $_POST['premium'];
}
else {
    $premium = 0;
}

//check if any fields are empty
if (empty($firstName) || empty($lastName) || empty($user) || empty($email) || empty($pw) || empty($pwConf)){
    header("Location: ../signup.php?error=emptyfields");
    exit();
}
//check if first name contains only letters
elseif (!preg_match("/[a-zA-Z]/", $firstName)){
    header("Location: ../signup.php?error=invalidfirstName");
    exit();
}
//check if last name contains only letters
elseif (!preg_match("/[a-zA-Z]/", $lastName)){
    header("Location: ../signup.php?error=invalidlastName&user");
    exit();
}
// check if email is valid AND username contains only letters and/or numbrs
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/[a-zA-Z0-9]/", $user)){
    header("Location: ../signup.php?error=invaliduserandemail");
    exit();
}
// check if user contains only letters and/or numbers
elseif (!preg_match("/[a-zA-Z0-9]/", $user)){
    header("Location: ../signup.php?error=invaliduser");
    exit();
}
// check if email is valid
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../signup.php?error=invalidemail");
    exit();
}

//!check if password is longer than 8 chars - not sure I'll need this part though + define $error

elseif(strlen($pw) < 8 ){
    $error = "Password should be at least 8 characters long";
        header("Location: ../signup.php?error=passwordnot8chars");
    exit();
}

// check if passwords match 
elseif ($pw !== $pwConf){
    header("Location: ../signup.php?error=passwordcheck");
    exit();
}
//connect to database with prepared statements
else {
    $sql = "SELECT userName FROM userdb WHERE userName=?";
    $stmt = mysqli_stmt_init($connection);
    // checking database connection
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "sssssi", $firstName, $lastName, $user, $email, $pw, $premium);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        //check if username taken (last added part 31.08)
        $sql = "SELECT userName FROM userdb WHERE userName = '".$user."';";
        $resultscheck = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($resultscheck);
        if ($row >= 1){
            header("Location: ../signup.php?error=usertaken");
        }
        else {
            // prepared statement to insert data into database
            $sql = "INSERT INTO userdb (firstName, lastName, userName, email, password, premium) VALUES (?, ?, ?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($connection);
            // checking connection to database
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }
            else {
                // hash password into random characters, e.g. $2y$10$WVoIuX2pQ5
                $hashedPw = password_hash($pw, PASSWORD_DEFAULT);
                // submit data to database
                mysqli_stmt_bind_param($stmt, "sssssi", $firstName, $lastName, $user, $email, $hashedPw, $premium);
                mysqli_stmt_execute($stmt);
                header("Location: ../login.php");
                exit();
            }
        }
    }
    // ends the database connection. Mysqli does this automatically 
    // but adding the manual version will help it do so quicker
    // and use less db/site resources = better experience for user
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
    
}


?>