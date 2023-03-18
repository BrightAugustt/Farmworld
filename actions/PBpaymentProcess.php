<?php
require("../settings/core.php");
include_once '../controllers/cart_controller.php';
//order table will be used

	// $curl = curl_init();
	$order_id = $_POST['order_id'];
	$customer_id = $_POST['customer_id'];
	$merchant_id = $_POST['merchant_id'];
	$email = $_POST['customer_email'];
    $order_amount = $_POST['order_amount'];
	$order_date = date('Y/m/d');


	// Set the API endpoint URL
	$url = 'https://api.paybox.money/payment.php';
	
	// Set the payment parameters
	$params = array(
		'pg_merchant_id' => 'e476bf07-dffb-43bc-a8ae-a42be8be9c02',
		'pg_amount' => $order_amount, // The payment amount in kopecks
		'pg_currency' => 'GHS',
		'pg_email' => $email,
		'pg_order_id' => $order_id,
		'pg_date' => $order_date,
		'pg_result_url' => 'https://yourwebsite.com/payment/success', // URL to redirect the user after successful payment
		'pg_success_url' => 'https://yourwebsite.com/payment/success', // URL to redirect the user after successful payment
		'pg_failure_url' => 'https://yourwebsite.com/payment/failure', // URL to redirect the user after failed payment
		'pg_testing_mode' => 1, // Set to 0 for live payments
	);
	
	// Set the secret key
	$secret_key = 'e476bf07-dffb-43bc-a8ae-a42be8be9c02';
	
	// Generate the signature
	ksort($params); // Sort the parameters alphabetically
	$signature = md5(http_build_query($params) . $secret_key);
	
	// Add the signature to the payment parameters
	$params['pg_sig'] = $signature;
	
	// Send the payment request using cURL
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process the payment response
	$result = array();
	parse_str($response, $result);
	
	if ($result['pg_status'] == 'ok') {
		$order = insert_order_ctr($customer_id,$p_invoice,$order_date,$orderStatus);

		if($order){
			// Payment successful
			// Redirect the user to the success URL
			header('Location: ' . $params['pg_success_url']);
		}else{
			echo "Order insert failed";
		}
	} else {
		// Payment failed
		// Redirect the user to the failure URL
		header('Location: ' . $params['pg_failure_url']);
	}

	// convert the response to PHP object
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){
    $email = $_SESSION['customer_email'];
    $random = rand(10,10000);
    $add = $_GET['amount'];
    $cid = $_SESSION['customer_id'];
    $p_invoice = mt_rand(10, 1000);
    $date = date('Y/m/d');
    $orderStatus = 'success';



if($order){
    header("location: ../Views/paymentSuccess.php");
}else{
    echo "Order insert failed";
}
?>