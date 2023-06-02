<!DOCTYPE html>
<html>
<head>
<title>PHP 12C</title>
</head>
<body>
    <h1>Associative Arrays</h1>
    <?php
        $dict1 = array('a' => 1, 'b' => 2);
        $dict2 = $dict1;
        $dict1['b'] = 4;
        echo "\$dict1['b'] = ", $dict1['b'],"<br>\n";
        echo "\$dict2['b'] = ", $dict2['b'],"<br>\n";

        echo "<br>";
        echo "dict1 <br>";
        foreach ($dict1 as $key => $value) {
            echo "($key, $value)<br>\n";
        }
        echo "<br>";

        echo "dict2 <br>";
        foreach ($dict2 as $key => $value) {
            echo "($key, $value)<br>\n";
        }

        $text = 'lorem ipsum elit congue auctor inceptos taciti suscipit tortor auctor integer congue hac nullam hac auctor tellus nullam inceptos nullam integer tellus nullam auctor elit lorem ipsum elit';
        
        echo "<br>";
        echo "<br>";


        $dict3 = array();
        $words = explode(" ", $text); //memisahkan kalimat menjadi kata make spasi

        foreach ($words as $word) {
            if (array_key_exists($word, $dict3)) {
                $dict3[$word] += 1;
            } else {
                $dict3[$word] = 1;
            }
        }

        foreach ($dict3 as $key => $value) {
            echo "$key -> $value<br>\n";
        }

        arsort($dict3); // mengurutkan array berdasarkan nilai secara menurun

        echo "<table border='1'";
        echo "<tr><th>Kata</th><th>Jumlah kemunculan</th></tr>";

        foreach ($dict3 as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>