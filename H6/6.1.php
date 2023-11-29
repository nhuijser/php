<?php

$dbh = new PDO('mysql:host=localhost;dbname=phpschool', 'root', 'root');

if ($dbh) {
    echo "Connection succesful<br><br>";
} else {
    echo "Connection failed<br><br>";
}

foreach ($dbh->query("SELECT * FROM cursist") as $row) {
    print_r($row);
    echo "<br>";
}
