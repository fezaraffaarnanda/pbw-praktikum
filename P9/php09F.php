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

// cek apakah tombol Tambah diklik
if (isset($_POST["tambah"])) {
    header("Location: php09E.php");
    exit;
}

// cek apakah tombol Edit atau Hapus pada row tabel diklik
if (isset($_POST["edit"])) {
    $slot = $_POST["edit"];
    header("Location: php09G.php?slot=$slot");
    exit;
} else if (isset($_POST["hapus"])) {
    $slot = $_POST["hapus"];
    // query untuk menghapus data dari tabel
    $sql = "DELETE FROM meetings WHERE slot=$slot";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// query untuk mengambil data dari tabel
$sql = "SELECT * FROM meetings";
$result = $conn->query($sql);

// cek apakah query berhasil
if ($result->num_rows > 0) {
    // output data of each row
    echo "<table>";
    echo "<tr><th>Slot</th><th>Name</th><th>Email</th><th>Edit</th><th>Hapus</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["slot"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td>";
        echo "<td><form action=\"\" method=\"post\"><button type=\"submit\" name=\"edit\" value=\"" . $row["slot"] . "\">Edit</button></form></td>";
        echo "<td><form action=\"\" method=\"post\"><button type=\"submit\" name=\"hapus\" value=\"" . $row["slot"] . "\">Hapus</button></form></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// tutup koneksi
$conn->close();

// button Tambah
echo "<form action=\"\" method=\"post\"><button type=\"submit\" name=\"tambah\">Tambah</button></form>";

?>
