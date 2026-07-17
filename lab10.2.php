<!DOCTYPE html>
<html>
<head>
    <title>Display Users</title>
</head>
<body>

<h2>User Details</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>product_name</th>
        <th>price</th>
        <th>type</th>
        <th>image</th>
        <th>qty</th>
    </tr>

<?php

include"db.php";

$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['type']; ?></td>
    <td><?php echo $row['image']; ?></td>
    <td><?php echo $row['qty']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>