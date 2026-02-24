<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .coupon {
            width: 300px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            overflow: hidden;
            position: relative;
            text-align: center;
            padding: 20px;
        }
        .coupon .ribbon {
            position: absolute;
            top: -10px;
            right: -10px;
            background: gold;
            color: white;
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            transform: rotate(45deg);
            width: 100px;
            text-align: center;
        }
        .coupon h2 {
            color: #333;
            margin: 10px 0;
        }
        .coupon p {
            margin: 5px 0;
            color: #666;
        }
        .coupon .code {
            font-size: 18px;
            font-weight: bold;
            color: #d9534f;
            background: #f8d7da;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php
include '../config.php';
$admin = new Admin(); 
$query = $admin->ret("SELECT * FROM `coupons` ORDER BY `id` DESC");
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='coupon'>
            <div class='ribbon'>Voucher</div>
            <h2>{$row['discount_type']} Discount</h2>
            <p><strong>Value:</strong> {$row['discount_value']}</p>
            <p><strong>Min Order:</strong> {$row['min_order_value']}</p>
            <p><strong>Max Discount:</strong> {$row['max_discount_value']}</p>
            <p><strong>Expiry:</strong> {$row['expiration_date']}</p>
            <p class='code'>{$row['code']}</p>
        </div>";
}
?>
</body>
</html>
