<?php
    session_start ();
    if (isset($_REQUEST['item'])){
        $_SESSION['item'] = $_REQUEST['item'];
        $_SESSION['timestamp'] = time();
    }
?>
<!DOCTYPE html>
<html lang='en-GB'>
<head><title>PHP10B</title></head>
<body>
    <form action="php10C.php" method="post">
        <label>Address: <input type="text" name="address"></label>
        <!-- no hidden input required (soalnya udah di simpen di super global session-->
        <input type="submit" value="Send">
    </form>
</body>
</html>