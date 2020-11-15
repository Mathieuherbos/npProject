<?php

$db = new PDO ('mysql:host=sql100.epizy.com;port=3306;dbname=epiz_26591763_catflix','epiz_26591763','nNU2fD6vzKC', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//session_start();

// checking if user is logged in and if not, redirecting to index.html
// if(isset($_SESSION['userN'])){
//     echo "<p>Welcome " . $_SESSION['userN'] . "</p>";
//     // we can also do the same with the user ID
// }
// else {
//     // once session expires, go back to landing page
//     header("location: ../index.html");
//     // we can add other options here
// }


// setting user variables from the session information
$userID = $_SESSION['userId'];
$userName = $_SESSION['userN'];
// variable taken from selected video linked to streaming php
if(isset($_GET['id'])) {
                    $getid = intval($_GET['id']);
                    $reponse = $db->prepare('SELECT * FROM youtubeinfos WHERE id = ?');
                    $reponse->execute(array($getid));
                    $datas = $reponse->fetch();

// Checking if the user is premium
$stmt = $db->prepare("SELECT premium FROM userdb WHERE id = '".$userID."' AND premium = 1;");
$stmt->execute();
$premium = $stmt->rowCount();
//echo $premium;

// if user premium, set textarea and button to disabled
if($premium !== 1){
    $message =  "you are not premium, you cannot comment on this page";
    // setting variable do diable textarea and button
    $disabled = "disabled";
}
else {
    //$message = "you are premium";
    $disabled = "";
}

// submitting comment to db - only available if premium
if(isset($_POST['comment'])){
    if(!empty($_POST['comment'])){
        $comment = htmlspecialchars($_POST['comment']);

        $ins = $db->prepare('INSERT INTO comments(userID, userName, streamingID, body) 
        VALUES (?, ?, ?, ?)');
        $ins->execute(array($userID, $userName, $getid, $comment));

        $message = "your comment has been submitted";
        // redirect to stop comments from resumitting upon page reload
       // header("location: streaming.php?CommentSubmitted");
        //header("Refresh:0");
    } else {
        $messsage = "please enter a comment";
    }
    
}


// Fetching comments for selected video and ordering by most recent on top
$content = $db->query("SELECT * FROM comments WHERE streamingID = '".$getid."' ORDER BY id DESC");
// coudld also order by date
}
?>