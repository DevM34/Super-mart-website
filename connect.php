<?php
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
     
    //DATABASE CONNECTION
    $conn = new mysqli('localhost','root','','register');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into Register1(Username, Password, Email, Phone) values(?, ?, ?, ?)");
        $stmt->bind_param("sssi", $Username, $Password, $Email, $Phone);
        $execval = $stmt->execute();
        echo $execval;
        echo "registration successful......";
        $stmt->close();
        $conn->close();
    }
?>