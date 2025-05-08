<?php
    include('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">

    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>E-mail</th>
    <th>Status</th>
    <th>...</th>
    

    </tr>
    <tr>

    <td>David</td>
    <td>Blanco</td>
    <td>david@gmail.com</td>
    <td>Active</td>
    <td>
        <img src= "icons/edit.png" width=18>
        <img src= "icons/delete.png" width=18>
        <img src= "icons/search.png" width=18>
    </td>
    </tr>

    </table>
</body>
</html>

<?php

$sql="SELECT";

?>