<?php
    $Full_name = $_POST['Full_name'];
    $Phone = $_POST['Phone'];
    $Landmark = $_POST['Landmark'];
    $City = $_POST['City'];
    $Address = $_POST['Address'];
     
    //DATABASE CONNECTION
    $conn = new mysqli('localhost','root','','register');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into checkout(Full_name, Phone, Landmark, City, Address) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sisss", $Full_name, $Phone, $Landmark, $City, $Address);
        $execval = $stmt->execute();
        echo $execval;
        echo "registration successful......";
        $stmt->close();
        $conn->close();
    }
?>