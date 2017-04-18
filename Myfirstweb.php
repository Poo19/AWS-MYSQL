<?php

$username = "username";
$password = "password";
$hostname = "xxxxxxxxxxxxx.us-west-1.rds.amazonaws.com:3306";
$dbname =   "dbname";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
echo "Connected to MySQL using username - $username, password - $password, host - $hostname<br>";
$selected = mysql_select_db("$dbname",$dbhandle) or die("Unable to connect to MySQL DB - check the database name and try again.");

$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);
if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
while ($row = mysql_fetch_row($result)) {
    echo "Table: {$row[0]}\n";
    $query = "SELECT * FROM {$row[0]} ";
    $result1 = mysql_query($query);
    //iterate over all the rows
    echo '<table cellpadding="0" cellspacing="0" class="db-table">';
    while($row = mysql_fetch_assoc($result1)){
        echo "<tr>";
        foreach($row as $key => $val){
        echo "<td>" .$val. " <BR/> </td>";
    }
        echo "</tr>";
    }
     echo '</table><br />';
}
mysql_free_result($result);

?>
