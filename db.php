<?php
/* Database connection settings */
$host = 'sqlsrv:server = tcp:sheebaserver.database.windows.net,1433';
$user = 'lynandal@sheebaserver';
$pass = 'Lindy8656';
$db = 'testtablewithSheeba';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
