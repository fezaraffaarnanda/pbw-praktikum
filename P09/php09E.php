<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 09E</title>
</head>
<body>
    <h1>Form Menambahkan Data Meeting</h1>
    <form action="php09E_action.php" method="post">
        <div>
            <label for="">Slot : </label>
            <input type="text" name="slot" required>
        </div>
        <div>
            <label for="">Name : </label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="">Email :</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <button type="submit">Add</button>
        </div>
    </form>
</body>
</html>