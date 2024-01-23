<?php 

    try {
        $server_name = "localhost";
        $dbname = "myblog_awdb1";
        $dbuser = "root";
        $dbpassword = "";

        //Data source Name
        $dsn = "mysql:host=$server_name;dbname=$dbname";
        $conn = new PDO($dsn,$dbuser,$dbpassword);

        // OR

        // $conn = new PDO("mysql:host=localhost;dbname=myblog_awdb1","root","");

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // echo "Connection Success";
        
    } catch (PDOException $e) {
        die("Connection fail:". $e->getMessage());
    }

?>

<!-- 
1. MySQLi Procudural
2. MySQLi Object-Oriented
3. PDO (PHP Data Object)

3 step MySQL connect
1. Connection with database
2. Run SQL Query
3. Closing database connection
 -->