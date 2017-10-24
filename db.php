<?php
/* Database connection settings */
$host = 'MYSQLCONNSTR_localdb';
$user = 'lynandal@sheebaserver';
$pass = 'Lindy8656';
$db = 'testtablewithSheeba';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
