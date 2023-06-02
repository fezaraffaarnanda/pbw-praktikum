<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            background-color: #007bff;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex;
        }

        nav ul li {
            margin-left: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        nav ul li a.active {
            background-color: #0056b3;
        }

        nav ul li a:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <header>
    <nav>
        <ul>
            <li><a class="active" href="#">Data Meeting</a></li>
            <li><a href="php10F_logout.php">Logout</a></li>
        </ul>
    </nav>
    </header>
</body>
</html>