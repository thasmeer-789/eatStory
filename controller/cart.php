<?php
include('../config.php');

$admin = new Admin();
$id = $_GET['id'];
$qty = $_GET['qty'];
$uid = $_SESSION['id'];

$b = $admin->ret("SELECT * FROM cart WHERE u_id='$uid' AND i_id='$id'");

if ($b->rowCount() > 0) {
    $row = $b->fetch(PDO::FETCH_ASSOC);
    if (isset($_GET['type']) && $_GET['type'] == 'inc') {
        $qty = (int)$row['quantity'] + 1;
    } else {
        $qty = max(1, (int)$row['quantity'] - 1); // Prevent negative quantity
    }

    $admin->cud("UPDATE cart SET quantity='$qty' WHERE u_id='$uid' AND i_id='$id'", "saved");

} else {
    $admin->cud("INSERT INTO cart (u_id, i_id, quantity) VALUES ('$uid', '$id', '1')", "saved");
}

$_SESSION['qty'] = $qty;
echo "<script>window.location='../cart.php';</script>";
?>
