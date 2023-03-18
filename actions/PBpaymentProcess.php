<?php
include_once '../controllers/cart_controller.php';
//order table will be used
if (isset($_POST['paybox_submit'])) {
	$order_id = $_POST['transaction_id'];
	$customer_id = $_POST['customer_id'];
	$merchant_id = $_POST['merchant_id'];
	$email = $_POST['customer_email'];
    $order_amount = $_POST['order_amount'];
	$order_date = date('Y/m/d');

	$success = insert_payment_ctr($order_amount,  $custId, $order_id, $merchant_id, $email, );
    
    
	if ($_POST["action"] == "process_payment") {
		$curl = curl_init();
		// $order_id = $_POST["order_id$order_id"];
		$customer_id = $_POST['customer_id'];
		// if (!$user_id){
		// 	$user_id = $_POST["user_id"];
		// }

		$order_id = $_POST["order_id"];
		$booking = get_products_by_id_ctr($order_id, $customer_id);
		$user = get_user_by_id_ctrl($user_id);

		// Getting booking information
		$amount = $booking["amount"];
		$seats = $booking["seats_booked_count"];


		//If user has an invoice for payment, redirect them to that
		$prev_booking = get_booking_transactions_by_id_ctrl($order_id);
		if(count($prev_booking ?? [])>0){
			echo ("https://paybox.com.co/invoice/".$prev_booking[0]["transaction_id"]);
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
				'name ' => $user["user_name"],
				'email ' => $email,
				'contact' => $user["user_phone"],
				'customer_id' => $user["user_id"]
			),
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer '. paybox_token()
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
			$curator_id = $booking["curator_id"];

			create_transaction_ctrl($reference, $amount, $user_id, $curator_id);
			// create_booking_transaction_ctrl($order_id, $reference);
			$user_info = get_user_by_id_ctrl($user_id);
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
		$user_id = get_session_user_id();
		//if get user id from post (might be a mobile app call)
		if (!$user_id){
			$user_id = $_POST["user_id"];
		}
		$booking = get_trip_booking_by_id_ctrl($order_id, $user_id);
		$user = get_user_by_id_ctrl($user_id);


		// Getting booking information
		// $amount = $booking["amount"];
		// $seats = $booking["seats_booked_count"];
		// $entry = get_booking_transactions_by_id_cls($order_id)[0];
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
						// $curator_id = $booking["curator_id"];
						// $success = remove_all_failed_transactions_ctrl($order_id);

						notify_transaction_completion($json["token"],$json["amount"]);
						// create_transaction_ctrl($reference, $amount, $user_id, $curator_id);
						// create_booking_transaction_ctrl($order_id, $reference);
						// send_payment_reciept($user["email"],$order_id,$user_id);
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
		$user = get_session_user_id();

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