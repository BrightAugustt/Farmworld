<?php
require("../settings/core.php");
include_once '../controllers/cart_controller.php';

if (isset($_POST['paybox_momoSubmit'])) {
	$order_id = $_POST['order_id'];
	$customer_id = $_POST['customer_id'];
	$email = $_POST['customer_email'];
	$number = $_POST['customer_contact'];
	$order_amount = $_POST['order_amount'];
	$order_date = date('Y/m/d');
	$payMode = $_POST['mode'];
	$network = $_POST['network'];


	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://paybox.com.co/pay',
		CURLOPT_HTTPHEADER => array('Authorization: Bearer e476bf07-dffb-43bc-a8ae-a42be8be9c02'),
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>
		array(
			'order_id' => $order_id,
			'currency' => 'GHS',
			'amount' => $order_amount,
			'mode' => $payMode,
			'mobile_network' => $network,
			// 'voucher_code' => '2314', 
			'mobile_number' => $number,
			'payload' => '{"key":"data"}',
			// 'payerName' => 'John Doe',
			'payerPhone' => '0',
			'payerEmail' => $email,
			'customer_id' => $customer_id,
			'callback_url' => ''
		),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	echo $response;


	// Process the payment response
	$result = array();
	parse_str($response, $result);

	if ($result['status'] == 'Success') {
		$order = insert_order_ctr($customer_id, $p_invoice, $order_date, $orderStatus);

		if ($order) {
			// Payment successful
			// Redirect the user to the success URL
			header('Location: ' . $params['pg_success_url']);
		} else {
			echo "Order insert failed";
		}
	} else {
		// Payment failed
		// Redirect the user to the failure URL
		header('Location: ' . $params['pg_failure_url']);
	}
}




?>