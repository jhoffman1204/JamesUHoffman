<?php

function setComments() {
    if(isset($_POST['commentSubmit'])){
        echo "comment exists";
    }
    else{
     echo "comment not there";   
    }
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
    $result = mysqli_query($conn, $sql);
}

?>