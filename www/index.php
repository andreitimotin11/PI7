<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 15:50
 */
$dsn = 'mysql:host=127.0.0.1;dbname=test';
$dbh = new PDO($dsn, 'root', '');
//var_dump($dbh);
$sth = $dbh->prepare('SELECT * FROM persons');
$sth->execute();

$data = $sth->fetchAll();
var_dump($data);