<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options); // Use $options
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);

    echo "Database and table users created successfully.";
} catch(PDOException $error) {
    echo "Host: $host<br>";
    echo "Username: $username<br>";
    echo "Password: $password<br>";
    echo $sql . "<br>" . $error->getMessage();
}
