<?php
// First, you will need to obtain your PayBox API credentials, including your merchant ID and API key. 
// These credentials will be used to authenticate your requests to the PayBox API. You can store them in your website's configuration file or 
// environment variables for security.
// PayBox API credentials
$merchant_id = "YOUR_MERCHANT_ID";
$api_key = "YOUR_API_KEY";

// When the customer submits this form, it will redirect them to the PayBox payment page, where they can complete the transaction 
// using their mobile money account.

// Once the payment is completed, PayBox will send a notification to your website's IPN (Instant Payment Notification) URL, which you 
// specified in the notify_url field of the form. You will need to implement a PHP script that handles this notification and updates the 
// order status accordingly.

// Here is some sample code for the IPN handler script:
// Get the transaction details from the PayBox notification
$transaction_id = $_POST['transaction_id'];
$status = $_POST['status'];

?>
<!-- Next, you will need to create a form that allows customers to select PayBox as a payment option and initiate transactions. 
This form should include the necessary input fields, such as the customer's name, email address, order amount, and a unique transaction ID. -->
<form method="post" action="https://www.paybox.com.gh/payment">
  <input type="hidden" name="merchant_id" value="<?php echo $merchant_id; ?>">
  <input type="hidden" name="transaction_id" value="<?php echo uniqid(); ?>">
  <input type="hidden" name="description" value="Order payment">
  <input type="hidden" name="return_url" value="https://www.example.com/checkout/thank-you">
  <input type="hidden" name="cancel_url" value="https://www.example.com/checkout/cancel">
  <input type="hidden" name="notify_url" value="https://www.example.com/checkout/paybox-ipn">
  <input type="text" name="customer_name" placeholder="Enter your name">
  <input type="email" name="customer_email" placeholder="Enter your email address">
  <input type="number" name="amount" placeholder="Enter the order amount">
  <button type="submit" name="paybox_submit">Pay with PayBox</button>
</form>