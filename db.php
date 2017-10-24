// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:sheebaserver.database.windows.net,1433; Database = testtablewithSheeba", "lynandal", "Lindy8656");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "lynandal@sheebaserver", "pwd" => "Lindy8656", "Database" => "testtablewithSheeba", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sheebaserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
