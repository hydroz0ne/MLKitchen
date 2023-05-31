<?php
//Database connection
    $conn = new mysqli('localhost', 'root', '', 'mlkitchen');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(fullname, phone, email, subject, message)
            values(?,?,?,?,?)");
        $stmt->bind_param("sisss", $fullname, $phone, $email, $subject, $message);
        $stmt->execute();
        echo "Thank you, nessage sent successfully!";
        $stmt->close();
        $conn->close();
    }
?>