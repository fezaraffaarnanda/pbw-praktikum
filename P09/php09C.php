<!DOCTYPE html>
<html lang='en-GB'>
<head>
<title>PHP09 C</title>
</head>
<body>
    <?php
    echo 'Item: ', $_REQUEST['item'], '<br>';
    echo 'Address: ', $_REQUEST['address'], '<br>';
    ?>
     <form action="php09A.php" method="get">
        <input type="submit" value="Back">
    </form>
</body>
</html>