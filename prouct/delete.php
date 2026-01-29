<?php
include "db.php";
$id = $_GET['id'];

$res = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
$row = mysqli_fetch_assoc($res);

if (isset($_POST['delete'])) {
    mysqli_query($conn, "DELETE FROM products WHERE id=$id");
    header("Location: index.php");
}
?>

<h3>DELETE PRODUCT</h3>

Name: <?= $row['name'] ?><br>
Buying Price: <?= $row['buying_price'] ?><br>
Selling Price: <?= $row['selling_price'] ?><br>
Displayable: <?= $row['display'] ?><br><br>

<form method="POST">
    <input type="submit" name="delete" value="Delete">
</form>