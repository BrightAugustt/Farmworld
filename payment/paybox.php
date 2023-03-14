<?php
// First, you will need to obtain your PayBox API credentials, including your merchant ID and API key. 
// These credentials will be used to authenticate your requests to the PayBox API. You can store them in your website's configuration file or 
// environment variables for security.
// PayBox API credentials
$merchant_id = "#e476bf07-dffb-43bc-a8ae-a42be8be9c02";
$api_key = "e476bf07-dffb-43bc-a8ae-a42be8be9c02";

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

<!-- Create a PayBox account and obtain your API credentials (merchant ID and secret key).

Download and install the PayBox SDK by following the instructions provided by PayBox. This will involve downloading a PHP library and 
installing it on your web server.

Configure your website to communicate with the PayBox API using the SDK. Here's an example of how you could do this: -->
<?php
require_once 'paybox/PayBox.php'; // Include the PayBox PHP library

$merchantId = 'your-merchant-id'; // Replace with your actual merchant ID
$secretKey = 'your-secret-key'; // Replace with your actual secret key

$paybox = new PayBox($merchantId, $secretKey); // Initialize the PayBox object

// Set the PayBox API endpoint (sandbox or live)
$isTestMode = true; // Change to false when you're ready to go live
$paybox->setTestMode($isTestMode);

// Optionally, set other PayBox configuration options
$paybox->setLanguage('en'); // Set the language to use for PayBox error messages

// Handle a payment request from the user
if (isset($_POST['payment_amount'])) {
    $paymentAmount = $_POST['payment_amount']; // Get the payment amount from the user
    $paymentDescription = 'Payment for E-Commerce order'; // Set a description for the payment

    // Generate a unique payment reference
    $paymentReference = uniqid();

    // Build the payment request data
    $paymentData = array(
        'amount' => $paymentAmount,
        'description' => $paymentDescription,
        'reference' => $paymentReference,
    );

    // Send the payment request to PayBox
    $response = $paybox->initiatePayment($paymentData);

    // Check if the payment request was successful
    if ($response['status'] == 'success') {
        // Redirect the user to the PayBox payment page
        header('Location: ' . $response['redirect']);
        exit;
    } else {
        // Handle the payment request failure
        echo 'Payment request failed: ' . $response['message'];
    }
}
?>

<!-- In this example, we're checking for the payment_reference parameter in the URL, which is provided by PayBox in the redirect URL after a 
payment is made. We're then using the checkPaymentStatus() method to verify the payment status with PayBox. If the payment was successful, 
we're handling it appropriately, and if it failed, we're displaying an error message.

Note that this is just a basic example, and you may need to modify it to suit your specific requirements. Additionally, you'll need to 
ensure that the payment_reference parameter is passed correctly in the redirect URL from PayBox to your website. -->
<?php
require_once 'paybox/PayBox.php'; // Include the PayBox PHP library

$merchantId = 'your-merchant-id'; // Replace with your actual merchant ID
$secretKey = 'your-secret-key'; // Replace with your actual secret key

$paybox = new PayBox($merchantId, $secretKey); // Initialize the PayBox object

// Set the PayBox API endpoint (sandbox or live)
$isTestMode = true; // Change to false when you're ready to go live
$paybox->setTestMode($isTestMode);

// Handle the payment response from PayBox
if (isset($_GET['payment_reference'])) {
    $paymentReference = $_GET['payment_reference']; // Get the payment reference from the PayBox response
    $paymentData = array(
        'reference' => $paymentReference,
    );

    // Check if the payment was successful
    $response = $paybox->checkPaymentStatus($paymentData);
    if ($response['status'] == 'success' && $response['data']['status'] == 'successful') {
        // Handle the successful payment
        echo 'Payment was successful!';
    } else {
        // Handle the failed payment
        echo 'Payment failed: ' . $response['message'];
    }
}
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