<?php
    // Akses GET di php12A.php
    $data = file_get_contents("http://localhost/pbw/P12/php12A.php");
    $parse_data = json_decode($data,true);
    var_dump($parse_data);
    $ch = curl_init();
    
    // Akes POST di php12B.php
    $data = array(
        'slot' => 95,
        'name' => 'Alekk',
        'email' => 'alek@example.com'
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/pbw/P12/php12B.php');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response,true);
    echo "<br/><br/>";
    var_dump($data);

    // Akses PUT di php12C.php
    $data = array(
        'slot' => 98,
        'name' => 'Balelekk Banget',
        'email' => 'balelek@gmail.com'
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/pbw/P12/php12C.php');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response,true);
    echo "<br/><br/>";
    var_dump($data);

    // Akses DELETE di php12D.php
    $data = array(
        'slot' => 98
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/pbw/P12/php12D.php');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response,true);
    echo "<br/><br/>";
    var_dump($data);
?>