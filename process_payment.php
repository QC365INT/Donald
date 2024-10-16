<?php
// process_payment.php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clientPhone = $_POST['clientPhone'];
    $amount = $_POST['amount'];
    $expiryTime = time() + 300; // 5 minutes from now

    // Here you would integrate with the M-Pesa API for STK push
    // This is a placeholder for the actual API call
    $response = sendStkPush($clientPhone, $amount);

    if ($response['status'] == 'success') {
        // Store transaction in the database
        $stmt = $conn->prepare("INSERT INTO transactions (client_phone, amount, expiry_time) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $clientPhone, $amount, $expiryTime);
        
        if ($stmt->execute()) {
            echo "Payment request sent successfully. Please check your M-Pesa.";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error sending payment request: " . $response['message'];
    }
}
function sendStkPush($phone, $amount) {
    // Simulated response from M-Pesa API
    return ['status' => 'success', 'message' => 'Request sent.'];
}
?>
