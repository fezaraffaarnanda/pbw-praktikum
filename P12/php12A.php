<?php
require_once 'connection.php';

try {
        $pdo = new PDO($dsn,$db_username,$db_password,$opt);
        $sql = "select * from meetings";
        $stmt = $pdo->query($sql)->fetchAll();

        if ($stmt) { //if query result is not empty
            foreach($stmt as $row) {
                $item[] = [
                'slot'=> $row["slot"],
                'name'=> $row["name"],
                'email'=>$row["email"]
                ];
            }
        }
        $response = array('status'=>'200 OK','data' => $item);
        header('Content-type: application/json');
        echo json_encode($response);
        $pdo = NULL;
    }
    catch (PDOException $e) {
        exit("PDO Error: ".$e->getMessage()."<br>");
    }
?>