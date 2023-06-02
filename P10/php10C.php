<?php
session_start ();

if (time() - $_SESSION['timestamp'] > 5) {
    // last request was more than 5 seconds ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header('Location: php10A.php');
}
// not necessary but convenient
if (isset($_REQUEST['address']))
    $_SESSION['address'] = $_REQUEST['address'];
?>
<!DOCTYPE html>
<html lang='en-GB'>
<head><title>PHP10C</title></head>
<body>
    <?php
        echo $_SESSION['item'] , "<br>";
        echo $_SESSION['address'];
        // Once we do not need the data anymore , get rid of it
        session_unset();
        session_destroy();
    ?>
</body>
</html>