<?php
require_once 'connection.php';

try {
        $pdo = new PDO($dsn,$db_username,$db_password,$opt);
        parse_str(file_get_contents("php://input"),$_PUT);
        $slot = $_PUT['slot'];
        $name = $_PUT['name'];
        $email = $_PUT['email'];
        $stmt = $pdo->prepare("UPDATE meetings SET name = :name, email = :email WHERE slot = :slot");
        $results = $stmt->execute([
            'slot' => $slot,
            'name' => $name,
            'email' => $email
        ]);
        if ($results){
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