<?php 
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $pdo = new PDO("mysql:host=localhost;dbname=pertemuan9;charset=utf8mb4","root","");
        $stmt = $pdo -> prepare("SELECT * FROM user WHERE username = ? AND password = md5(?)");
        $stmt -> execute([$_POST['username'],$_POST['password']]);

        if ($stmt->rowCount() >= 1) {
            // login berhasil
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header("Location: php11F.php");
        } else {
            echo "Username atau password salah!";
        }
    
    } else {
        echo "Usernam atau password tidak boleh kosong!";
    }
?>