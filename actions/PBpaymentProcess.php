<?php

if (isset($_POST['paybox_submit'])) {
    // PayBox API credentials
    $merchant_id = $_POST['merchant_id'];
    $api_key = $_POST['api_key'];

    // Transaction data
    $currency = $_POST['currency'];
    $language = $_POST['language'];
    $payment_method = $_POST['payment_method'];
    $transaction_id = $_POST['transaction_id'];
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $order_amount = $_POST['order_amount'];

    // Calculate hash
    $hash = md5($api_key . $transaction_id . $order_amount . $currency);

    // PayBox API endpoint
    $paybox_url = 'https://api.paybox.money/v4/payments';

    // Build request data
    $data = array(
        'amount' => $order_amount,
        'currency' => $currency,
        'paymentMethod' => $payment_method,
        'paymentDescription' => 'Order #' . $transaction_id,
        'merchantPaymentId' => $transaction_id,
        'client' => array(
            'email' => $customer_email,
            'name' => $customer_name,
        ),
        'options' => array(
            'language' => $language,
        ),
        'settings' => array(
            'successUrl' => 'https://example.com/payment/success',
            'failureUrl' => 'https://example.com/payment/failure',
        ),
        'additionalFields' => array(
            'hash' => $hash,
            'site_url' => 'https://example.com',
        ),
    );

    // Build HTTP headers
    $headers = array(
        'Content-Type: application/json',
        'Authorization: Basic ' . base64_encode($merchant_id . ':' . $api_key),
    );

    // Send request to PayBox API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $paybox_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    curl_close($ch);

    // Handle response from PayBox API
    if ($response) {
        $response_data = json_decode($response, true);
        if ($response_data['status'] === 'created') {
            // Redirect customer to PayBox payment page
            header('Location: ' . $response_data['paymentUrl']);
            exit;
        } else {
            // Payment creation failed
            echo 'Payment creation failed: ' . $response_data['message'];
        }
    } else {
        // Failed to connect to PayBox API
        echo 'Failed to connect to PayBox API';
    }
}
?>