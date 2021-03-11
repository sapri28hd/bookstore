<?php
    include_once("db.php");
    $dbconn = new mysqli();
    $dbconn->connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowBook</title>
</head>
<body>
    <h3>ตาราง book</h3>
        <form action="" method="post">
            <table border="1" align="center">
                <tr><th>BookID</th><th>BookName</th><th>TypeID</th><th>StatusID</th><th>Publish</th><th>UnitPrice</th><th>UnitRent</th><th>DayAmount</th><th>Picture</th><th>BookDate</th></tr>
                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            </table>
        </form>
</body>
</html><?php

?>