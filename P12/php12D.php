<?php
require_once 'connection.php';

try {
        $pdo = new PDO($dsn,$db_username,$db_password,$opt);
        parse_str(file_get_contents("php://input"),$_DELETE);
        $slot = $_DELETE['slot'];
        $stmt = $pdo->prepare("DELETE from meetings WHERE slot = :slot");
        $results = $stmt->execute([
            'slot' => $slot
        ]);
        if ($results){
            $msg = "Data berhasil dihapus";
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