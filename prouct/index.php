<?php
include "db.php";

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell'];
    $display = isset($_POST['display']) ? "Yes" : "No";

    mysqli_query($conn,
        "INSERT INTO products (name, buying_price, selling_price, display)
         VALUES ('$name', '$buy', '$sell', '$display')"
    );
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
</head>
<body>

<h3>ADD PRODUCT</h3>

<form method="POST">
    Name<br>
    <input type="text" name="name"><br><br>

    Buying Price<br>
    <input type="number" name="buy"><br><br>

    Selling Price<br>
    <input type="number" name="sell"><br><br>

    <input type="checkbox" name="display"> Display<br><br>

    <input type="submit" name="save" value="SAVE">
</form>

<hr>

<h3>DISPLAY</h3>

<table border="1" cellpadding="6">
<tr>
    <th>NAME</th>
    <th>PROFIT</th>
    <th></th>
    <th></th>
</tr>

<tbody id="result">
<?php
$res = mysqli_query($conn, "SELECT * FROM products WHERE display='Yes'");
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
</tbody>
</table>

<hr>

<h3>SEARCH</h3>

<input type="text" id="search" placeholder="Search by name">

<script>
document.getElementById("search").addEventListener("keyup", function () {
    var txt = this.value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "search_ajax.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };

    xhr.send("search=" + encodeURIComponent(txt));
});
</script>

</body>
</html>
