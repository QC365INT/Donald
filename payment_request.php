<?php
// payment_request.php
session_start();
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Request</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Send Payment Request</h1>
        <form id="paymentForm" method="POST" action="process_payment.php">
            <label for="clientPhone">Client Phone Number:</label>
            <input type="text" id="clientPhone" name="clientPhone" required>
            <input type="hidden" name="amount" value="20">
            <button type="submit">Send Payment Request</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
