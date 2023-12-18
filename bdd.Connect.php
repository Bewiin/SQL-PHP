<?php
    $bdd = new PDO('mysql:host=localhost;dbname=la_base',
    'root','',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>