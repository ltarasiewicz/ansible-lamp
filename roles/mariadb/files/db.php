<?php

$connection = new PDO('mysql:host=localhost; dbname=ltarasiewicz', 'luqo33', 'bonzo86');
$statement = $connection->query('SELECT message FROM demo');

echo $statement->fetchColumn();
