<?php
if (isset($_GET['code']) && isset($_GET['discount'])) {
    $code = $_GET['code'];
    $discount = $_GET['discount'];
} else {
    $code = "N/A";
    $discount = "N/A";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon Card</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .coupon-card {
            background: #fff;
            padding: 20px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .coupon-code {
            font-size: 24px;
            font-weight: bold;
            color: #ff5722;
        }
        .discount-text {
            font-size: 18px;
            color: #4caf50;
            margin: 10px 0;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="coupon-card">
        <h2>🎉 Congratulations!</h2>
        <p>You’ve received a discount coupon.</p>
        <p class="coupon-code">Code: <?php echo htmlspecialchars($code); ?></p>
        <p class="discount-text">Discount: <?php echo htmlspecialchars($discount); ?>% OFF</p>
        <p>Use this coupon during checkout to avail the discount.</p>
        <a href="#" class="btn">Redeem Now</a>
    </div>
</body>
</html>
