<?php
    require_once 'connection.php';
    
    try {
        $pdo = new PDO($dsn,$db_username,$db_password,$opt);
        //Code 6
        $stmt = $pdo->prepare('SELECT * FROM meetings WHERE name LIKE ?');
        $stmt->execute([ '%'.$_GET['keyword'].'%' ]);
        // lookup all hints if query result is not empty
        if ($stmt) {
            echo json_encode($stmt->fetchAll());
        }
        else {// Output "no suggestion" if no hint was found or output correct values
            echo "no suggestion";
        }
            //$pdo = NULL;
    }
    catch (PDOException $e) {
        exit("PDO Error: ".$e->getMessage()."<br>");
    }
?>