<?php

// koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pertemuan9";

$conn = new mysqli($servername, $username, $password, $dbname);

// cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ambil data dari form
$slot = $_POST["slot"];
$name = $_POST["name"];
$email = $_POST["email"];

// query untuk memasukkan data ke dalam database
$sql = "INSERT INTO meetings (slot, name, email)
VALUES ('$slot', '$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
    header("Location: ./php09F.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// tutup koneksi
$conn->close();

?>
