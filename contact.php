<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $url = $_POST['url'];
    $design = $_POST['design'];
    $consult = $_POST['consult'];
    $seo = $_POST['seo'];
    $data = $_POST['data'];
    // Database Connection
    $conn = new mysqli('localhost','root','','first-database');
    if ($conn->connect_error) {
        die('Connection Failed:'.$conn->connect_error);
    } else {
        $stmt=$conn->prepare("insert into clients(name,email,phone,date,url,design,consult,seo,data)values(?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssissssss",$name,$email,$phone,$date,$url,$design,$consult,$seo,$data);
        $stmt->execute();
        echo "Your information has been submitted";
        $stmt->close();
        $conn->close();
    }

?>