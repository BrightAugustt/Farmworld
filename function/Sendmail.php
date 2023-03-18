<?php
include_once '../controllers/crop_controller.php';
// Include the PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';



// Create a new PHPMailer object
$mail = new PHPMailer(true);

try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'farmaworld2023@gmail.com';
    $mail->Password = 'vjvoplfubhmglpny';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set email message parameters
    $mail->setFrom('farmaworld2023@gmail.com', 'Farmaworld');
    // the controller with the email in there
    $mail->addAddress(Sendemail_ctr($customer_id));
    $mail->isHTML(true);
    $mail->Subject = 'Test email';
    $mail->Body = 'This is a test email message';

    // Send the email
    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
}
?>

<?php
// Include the PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch customer email using customer ID
    $customer_id = $_POST['customer_id'];
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT customers.email FROM customers JOIN orders ON customers.id = orders.customer_id WHERE orders.customer_id = $customer_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $to_email = $row["email"];
        }
    } else {
        echo "No results found.";
    }

    $conn->close();

    // Create a new PHPMailer object
    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@gmail.com';
        $mail->Password = 'your_email_password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set email message parameters
        $mail->setFrom('your_email@gmail.com', 'Your Name');
        $mail->addAddress($to_email);
        $mail->isHTML(true);
        $mail->Subject = 'Test email';
        $mail->Body = 'This is a test email message';

        // Send the email
        $mail->send();
        $message = 'Email sent successfully';
    } catch (Exception $e) {
        $message = 'Email could not be sent. Error: ' . $mail->ErrorInfo;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
</head>
<body>
	<h1>Send Email</h1>
	<?php if(isset($message)) echo '<p>'.$message.'</p>'; ?>
	<form method="post">
		<label for="customer_id">Customer ID:</label>
		<input type="text" name="customer_id" id="customer_id">
		<input type="submit" name="submit" value="Send Email">
	</form>
</body>
</html>

