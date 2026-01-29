<?php
include "db.php";

$search = $_POST['search'];

$res = mysqli_query($conn,
    "SELECT * FROM products
     WHERE display='Yes'
     AND name LIKE '%$search%'"
);

while ($row = mysqli_fetch_assoc($res)) {
    $profit = $row['selling_price'] - $row['buying_price'];
?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $profit ?></td>
    <td><a href="edit.php?id=<?= $row['id'] ?>">edit</a></td>
    <td><a href="delete.php?id=<?= $row['id'] ?>">delete</a></td>
</tr>
<?php } ?>