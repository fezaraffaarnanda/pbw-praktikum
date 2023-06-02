<?php
    require_once 'connection.php';
    header('Content-type: application/json');

    if(!isset($_GET['slot'])){
        echo json_encode(['status' => '400 Bad Request']);
    }

    try{
        $slot = $_GET['slot'];
        $stmt = $pdo ->prepare('SELECT * FROM meetings where slot = :slot');
        $stmt -> execute(['slot' => $slot]);

        $results = $stmt->fetch();
        if($results){
            echo json_encode(['status' => '200 Ok', 'data' => $results]);
        }else{
            echo json_encode(['status' => '200 Ok', 'data' => [], 'message' => 'data not found']);
        }

    }catch(PDOException $er){
        exit("PDO Error : ".$er->getMessage()."<br>");
    }

?>