<?php
require_once 'connection.php';

try {
        $pdo = new PDO($dsn,$db_username,$db_password,$opt);
        $slot = $_POST['slot'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = "INSERT INTO `meetings` (`slot`, `name`, `email`) VALUES ('$slot', ' $name', '$email')";
        $stmt = $pdo->query($sql);

        if ($stmt){
            $msg = "Data berhasil ditambahkan.";
            } else{
            $msg = "Gagal.";
            }
            $response = array(
            'status'=>'201 Created',
            'message' => $msg
            );
            echo json_encode($response);
        
        $pdo = NULL;
    }
    catch (PDOException $e) {
        exit("PDO Error: ".$e->getMessage()."<br>");
    }
?>