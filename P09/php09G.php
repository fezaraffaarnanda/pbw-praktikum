<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pertemuan9';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (isset($_POST['submit'])) {
    $slot = $_POST['slot'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE meetings SET name='$name', email='$email' WHERE slot='$slot'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: php09F.php');
    } else {
        echo 'Gagal memperbarui data';
    }
}

if (isset($_GET['slot'])) {
    $slot = $_GET['slot'];

    $sql = "SELECT * FROM meetings WHERE slot='$slot'";
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($query);
}
?>

<body>
    <h1>Edit Meeting</h1>
    <form action="php09G.php" method="post">
        <input type="hidden" name="slot" value="<?php echo $data['slot']; ?>">
        <div>
            <label for="">Name : </label>
            <input type="text" name="name" value="<?php echo $data['name']; ?>" required>
        </div>
        <div>
            <label for="">Email :</label>
            <input type="email" name="email" value="<?php echo $data['email']; ?>" required>
        </div>
        <div>
            <button type="submit" name="submit">Update</button>
        </div>
    </form>
</body>
