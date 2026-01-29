<?php
include "db.php";
$id = $_GET['id'];

$res = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
$row = mysqli_fetch_assoc($res);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell'];
    $display = isset($_POST['display']) ? "Yes" : "No";

    mysqli_query($conn,
        "UPDATE products SET
         name='$name',
         buying_price='$buy',
         selling_price='$sell',
         display='$display'
         WHERE id=$id"
    );

    header("Location: index.php");
}
?>

<h3>EDIT PRODUCT</h3>

<form method="POST">
    Name<br>
    <input type="text" name="name" value="<?= $row['name'] ?>"><br><br>

    Buying Price<br>
    <input type="number" name="buy" value="<?= $row['buying_price'] ?>"><br><br>

    Selling Price<br>
    <input type="number" name="sell" value="<?= $row['selling_price'] ?>"><br><br>

    <input type="checkbox" name="display"
        <?= ($row['display']=="Yes")?"checked":"" ?>> Display<br><br>

    <input type="submit" name="update" value="SAVE">
</form>