<?php
class PayBox {
    private $merchantId;
    private $secretKey;
    private $apiEndpoint;

    public function __construct($merchantId, $secretKey) {
        $this->merchantId = $merchantId;
        $this->secretKey = $secretKey;
        $this->apiEndpoint = 'https://api.paybox.com.gh/pay'; // Default API endpoint
    }

    public function setTestMode($isTestMode) {
        if ($isTestMode) {
            $this->apiEndpoint = 'https://sandbox.paybox.com.gh/pay'; // Sandbox API endpoint
        } else {
            $this->apiEndpoint = 'https://api.paybox.com.gh/pay'; // Live API endpoint
        }
    }

    public function generatePaymentRequest($amount, $description, $orderId, $redirectUrl, $cancelUrl) {
        $timestamp = time();
        $nonce = uniqid();
        $reference = $this->generateReference();
        $hash = $this->generateHash($amount, $reference, $timestamp, $nonce);

        $data = array(
            'merchant_id' => $this->merchantId,
            'order_id' => $orderId,
            'amount' => $amount,
            'description' => $description,
            'reference' => $reference,
            'timestamp' => $timestamp,
            'nonce' => $nonce,
            'hash' => $hash,
            'redirect_url' => $redirectUrl,
            'cancel_url' => $cancelUrl,
        );

        $response = $this->sendRequest('POST', $this->apiEndpoint . '/create', $data);

        if ($response['status'] == 'success') {
            return $response['data']['checkout_url'];
        } else {
            throw new Exception($response['message']);
        }
    }

    public function checkPaymentStatus($paymentData) {
        $timestamp = time();
        $nonce = uniqid();
        $hash = $this->generateHash($paymentData['reference'], $timestamp, $nonce);

        $data = array(
            'merchant_id' => $this->merchantId,
            'reference' => $paymentData['reference'],
            'timestamp' => $timestamp,
            'nonce' => $nonce,
            'hash' => $hash,
        );

        $response = $this->sendRequest('POST', $this->apiEndpoint . '/status', $data);

        if ($response['status'] == 'success') {
            return $response['data'];
        } else {
            throw new Exception($response['message']);
        }
    }

    private function generateReference() {
        // Generate a unique payment reference
        // ...
    }

    private function generateHash($amount, $reference, $timestamp, $nonce) {
        // Generate a hash for the payment request or status check
        // ...
    }

    private function sendRequest($method, $url, $data) {
        // Send an HTTP request to the PayBox API endpoint
        // ...
    }
}
?>
