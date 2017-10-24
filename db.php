<?php
/* Database connection settings */
$host = 'localdb';
$user = 'azure';
$pass = '6#vWHD_$';
$db = 'testtablewithSheeba';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
