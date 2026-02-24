<?php
include 'config.php';
$admin = new Admin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id = $_POST['order_id'];
    $feedback = $_POST['feedback'];
    $rating = $_POST['rating'];
    $userid = $_POST['id'];

    $stmt = $admin->cud("INSERT INTO feedback (`user_id`,`order_id`, `message`, `ratings`) VALUES ('$userid','$order_id', '$feedback', '$rating')", "Saved");
    echo "<script>alert('Thank you for your feedback!'); window.location='track.php';</script>";

    // if ($stmt) {
    //     echo "<script>alert('Thank you for your feedback!'); window.location='track_order.php';</script>";
    // } else {
    //     echo "<script>alert('Something went wrong! Please try again.'); window.history.back();</script>";
    // }
}
?>
