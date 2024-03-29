<?php

	class http_handler {

		private function http_request($url, $request_type, $body = null ,array $header = null){

			$curl = curl_init();


			// Add header to curl request if one is given
			if ($header != null){
				curl_setopt_array($curl, array(CURLOPT_HTTPHEADER => $header));
			}

			// Add body to curl request if one is given
			if ($body != null){
				curl_setopt_array($curl, array(CURLOPT_POSTFIELDS => $body));
			}

			curl_setopt_array($curl, array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => $request_type,

			));


			//execute request
			$response = curl_exec($curl);
			curl_close($curl);

			return $response;
		}

		function get($url,$body = null, $header = null) {
			return $this->http_request($url,"GET", body: $body, header: $header);
		}


		function post($url, $body, $header = null){
			return $this->http_request($url,"POST", body: $body, header: $header);
		}
	}

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
