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

<?php
	require_once(__DIR__. "/core.php");


	class paybox_custom{
		private http_handler $http;
		private $mode;


		function __construct(){
			$this->http = new http_handler();
			$this->mode = "Test";
			// $this->mode = "Bank";
		}

		//Add to payload, booking_id, seats_booked,$trip_id,$user_id
		function charge_momo($order_id, $email,$amount, $network, $number, $payload = []){
			$body = array (
				"payerEmail" => $email,
				"payload" => json_encode($payload),
				"currency" => "GHS",
				"amount" => $amount,
				"mobile_network" => $network,
				"mode" => $this->mode,
				"order_id" => $order_id,
				"mobile_number" => $number,
				"callback_url" => "https://www.easygo.com.gh/processors/callback.php?action=paybox&mode="
			);


			return $this->http->post(
				"https://paybox.com.co/pay",
				$body,
				array("Authorization: Bearer ". paybox_token())
			);

		}


		function get_transaction($transaction_id){
			return $this->http->get("https://paybox.com.co/transaction/$transaction_id");
		}

		function get_banks(){
			return $this->http->get("https://paybox.com.co/settlement_accounts");
		}


		function withdraw($amount, $bank_account,$bank_code, $receiver_name, $receiver_email, $user_id, $currency = "GHS"){
			return $this->http->post(
				"https://paybox.com.co/transfer",
				array(
					"amount" => $amount,
					"currency" => $currency,
					"mode" => $this->mode,
					"customer_id" => $user_id,
					"bank_code" => $bank_code,
					"receiverName" => $receiver_name,
					"receiverEmail" => $receiver_email,
					"bank_account" => $bank_account,
					"callback_url" => "https://www.easygo.com.gh/processors/callback.php?id=paybox_transfer"
				),
				header: array("Authorization: Bearer ". paybox_token())

			);
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
















<?php
include_once '../controllers/cart_controller.php';
//order table will be used
if ($_POST["action"] == "paymentForm") {
	$curl = curl_init();
	$order_id = $_POST['order_id'];
	$customer_id = $_POST['customer_id'];
	$merchant_id = $_POST['merchant_id'];
	$email = $_POST['customer_email'];
    $order_amount = $_POST['order_amount'];
	$order_date = date('Y/m/d');

	$success = insert_payment_ctr($order_amount,  $custId, $order_id, $merchant_id, $email, $order_date);
    
    
		// $order_id = $_POST["order_id$order_id"];
		// if (!$id){
		// 	$id = $_POST["id"];
		// }

		$products = get_products_by_id_ctr($order_id, $custId);
		$user = getUserDetailsById_ctr($id);

		// Getting products information
		$amount = $products["amount"];
		$seats = $products["seats_booked_count"];


		//If user has an invoice for payment, redirect them to that
		$prev_products = get_products_transactions_by_id_ctrl($order_id);
		if(count($prev_products ?? [])>0){
			echo ("https://paybox.com.co/invoice/".$prev_products[0]["transaction_id"]);
			exit();
		}



		//if user doesn't have an invoice, create one and redirect them
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://paybox.com.co/invoice',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',

			CURLOPT_POSTFIELDS => array(
				'amount' => "$order_amount",
				'currency' => 'GHS',
				'order_id' => $order_id,
				'email ' => $user["customer_email"],
				'contact' => $user["customer_contact"],
				'customer_id' => $user["customer_id"]
			),
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer '. paybox_token("e476bf07-dffb-43bc-a8ae-a42be8be9c02")
			),
		));

		$response = curl_exec($curl);
		$json = json_decode($response, true);

		curl_close($curl);
		// return $json;

		if ($json) {
			// if ($json["status"] == "Success") {
			$reference = $json["token"];
			// $amount = $json["amount"];
			$curator_id = $products["curator_id"];

			create_transaction_ctrl($reference, $amount, $id, $curator_id);
			// create_products_transaction_ctrl($order_id, $reference);
			$user_info = get_user_by_id_ctrl($id);
			$user_name = $user_info["user_name"];
			$email = $user_info["email"];
			notify_transaction_initiation($reference,$user_name,$email,$amount);
			 create_transaction_invoice_ctrl($json["token"],$order_id);
			 echo $json["url"];
			exit();
		}else {
			echo "something went wrong";
		}
	} else if ($_POST["action"] == "verify_payment") {
		// $order_id = $_POST["order_id$order_id"]
		$order_id = $_POST["order_id$order_id"];
		$id = get_session_id();
		//if get user id from post (might be a mobile app call)
		if (!$id){
			$id = $_POST["id"];
		}
		$products = get_trip_products_by_id_ctrl($order_id, $id);
		$user = get_user_by_id_ctrl($id);


		// Getting products information
		// $amount = $products["amount"];
		// $seats = $products["seats_booked_count"];
		// $entry = get_products_transactions_by_id_cls($order_id)[0];
		// return $entry["transaction_id"];
		// foreach ($transactions as $entry) {
			$curl = curl_init();
			// $transaction_id = $entry["transaction_id"];

			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://paybox.com.co/transaction/$order_id",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'GET',
				CURLOPT_HTTPHEADER => array(
					'Authorization: Bearer '. paybox_token()
				),
			));

			$response = curl_exec($curl);
			try {

				$json = json_decode($response, true);
					curl_close($curl);
					if ($json["status"] == "Success") {
						update_transaction_status_ctrl($json["token"], "success");
						// $reference = $json["token"];
						// $amount = $json["amount"];
						// $curator_id = $products["curator_id"];
						// $success = remove_all_failed_transactions_ctrl($order_id);

						notify_transaction_completion($json["token"],$json["amount"]);
						// create_transaction_ctrl($reference, $amount, $id, $curator_id);
						// create_products_transaction_ctrl($order_id, $reference);
						// send_payment_reciept($user["email"],$order_id,$id);
						echo "Payment has been received";
						exit();
						// }
				}
			} catch (Exception) {
			}
		// }
		echo "Payment has not been received";
	} else if($_POST["action"] == "request_withdrawal"){
		$name = $_POST["name"];
		$provider = $_POST["provider"];
		$amount = $_POST["amount"];
		$number = $_POST["number"];
		$user = get_session_id();

		$result = request_withdrawal_ctrl($user,$name,$provider,$amount,$number);
		echo $result;
		$user_info = get_user_by_id_ctrl($user);
		$email = $user_info["email"];
		$curator_name = get_curator_name_from_id_ctrl($user);
		notify_withdrawal_request($email,$curator_name,$request,$amount);


		header("Location: ../curator/withdrawals.php");
	} else if ($_POST["action"] == "update_withdrawal_status"){
		$request_id = $_POST["id"];
		$status = $_POST["status"];
		$result = update_withdrawal_request_status_ctrl($request_id, $status);
		if ($result){
			echo "Success";
		} else {
			echo "Failed";
		}
		exit();
	}
}
}
}

// if (isset($_POST['paybox_submit'])) {
//     // PayBox API credentials
//     $merchant_id = $_POST['merchant_id'];
//     $api_key = $_POST['api_key'];

//     // Transaction data
//     $currency = $_POST['currency'];
//     $language = $_POST['language'];
//     $payment_method = $_POST['payment_method'];
//     $transaction_id = $_POST['transaction_id'];
//     $customer_name = $_POST['customer_name'];
//     $customer_email = $_POST['customer_email'];
//     $order_amount = $_POST['order_amount'];

//     // Calculate hash
//     $hash = md5($api_key . $transaction_id . $order_amount . $currency);

//     // PayBox API endpoint
//     $paybox_url = 'https://api.paybox.money/v4/payments';

//     // Build request data
//     $data = array(
//         'amount' => $order_amount,
//         'currency' => $currency,
//         'paymentMethod' => $payment_method,
//         'paymentDescription' => 'Order #' . $transaction_id,
//         'merchantPaymentId' => $transaction_id,
//         'client' => array(
//             'email' => $customer_email,
//             'name' => $customer_name,
//         ),
//         'options' => array(
//             'language' => $language,
//         ),
//         'settings' => array(
//             'successUrl' => 'https://example.com/payment/success',
//             'failureUrl' => 'https://example.com/payment/failure',
//         ),
//         'additionalFields' => array(
//             'hash' => $hash,
//             'site_url' => 'https://example.com',
//         ),
//     );

//     // Build HTTP headers
//     $headers = array(
//         'Content-Type: application/json',
//         'Authorization: Basic ' . base64_encode($merchant_id . ':' . $api_key),
//     );

//     // Send request to PayBox API
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $paybox_url);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//     $response = curl_exec($ch);
//     curl_close($ch);

//     // Handle response from PayBox API
//     if ($response) {
//         $response_data = json_decode($response, true);
//         if ($response_data['status'] === 'created') {
//             // Redirect customer to PayBox payment page
//             header('Location: ' . $response_data['paymentUrl']);
//             exit;
//         } else {
//             // Payment creation failed
//             echo 'Payment creation failed: ' . $response_data['message'];
//         }
//     } else {
//         // Failed to connect to PayBox API
//         echo 'Failed to connect to PayBox API';
//     }
// }
?>