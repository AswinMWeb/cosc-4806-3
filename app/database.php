<?php

function db_connect() {
    try {
        $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_DATABASE;
        $dbh = new PDO($dsn, DB_USER, DB_PASS);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    } catch (PDOException $e) {
        error_log('Database Connection Error: ' . $e->getMessage());
        return null;
    }
}
