<?php
include("../settings/core.php");
include("../controllers/cart_controller.php");
include("../function/function.php");

$custId = get_id();
// echo $custId;
$all_cartproducts = view_cart_ctr($custId);
$ip_add = getIPAddress();
$total = 0;

// $transaction_id = $_POST['transaction_id'];
// $status = $_POST['status'];
?>


<html lang="en">

<head>
    <title>Cart Management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- <style>
            img{+
                width:150px;
                height: 150px;
            }
        </style> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="../js/activepage.js"></script>
    <script defer src="../js/modal.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php require("./header.php"); ?>
    <main>
        <div class="container">
            <a class="btn btn-success" href="homepage.php" role="button">Continue Shopping</a>
            <h1 style="text-align: center;"><u> Items in Cart</u></h1>

            <table class="container mt-5 d-flex justify-content-center">
                <table class="table table-bordered w-30">
                    <table class="table table-striped">
                        <thread>
                            <tr>
                                <th>Crop Image </th>
                                <th>Crop Name</th>
                                <th>Quantity (Kg)</th>
                                <th>Crop Price</th>
                                <th>Total</th>
                                <th>Manage Quantity</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_cartproducts as $cart) {
                                    $totals = $total + ($cart['qty'] * $cart['crop_price']);
                                    echo "
                                    <tr>
                                    <td><img src='./../images/crops/{$cart['crop_image']}' style = height:100px; width:100px;></td>
                                    <td>{$cart['crop_name']}</td>
                                    <td>{$cart['qty']}</td>
                                    <td>{$cart['crop_price']}</td>
                                    <td>$totals</td>
                                    <td>
                                    <form class='form-inline' method='POST' action='../actions/manage_cartQty.php'>
                                        <input class='form-control mr-sm-2' type='hidden' value='$ip_add' name='ip_address'>
                                        <input class='form-control mr-sm-2' type='hidden' value='{$custId}' name='customer_id'>
                                        <input class='form-control mr-sm-2' type='hidden' name='crop_id' value ='{$cart['crop_id']}'>
                                        <input class='form-control mr-sm-2' name='qty' type='number' placeholder='Quantity' aria-label='Quantity'>
                                        <input type='submit' class='btn-btn primary' name='updateQty' value='Update'>
                                    </form>
                                    </td>
                                    <td>
                                    <a href='../actions/deletefromCart.php?crop_id={$cart['crop_id']}'data-toggle='tooltip'><i class='fa fa-trash' style='color:red'></i></a>
                                    </td>
                                    <br>
                                    </tr> ";
                                }
                                ?>
                                <?php $totalsum = totalPrice_ctr($custId); ?>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Subtotal: <?php echo $totalsum['Multiply']; ?></th>
                                    <form method="post" action="" id="paymentForm">
                                        <input type="hidden" name="customer_id" value="<?php echo $custId; ?>">
                                        <input type="hidden" name="crop_name" value="">
                                        <input type="hidden" name="order_id" value="<?php //echo $order_id(); 
                                                                                    ?>">
                                        <input type="hidden" name="description" value="Order payment">
                                        <input type="hidden" name="return_url" value="https://www.example.com/checkout/thank-you">
                                        <input type="hidden" name="cancel_url" value="https://www.example.com/checkout/cancel">
                                        <input type="hidden" name="notify_url" value="https://www.example.com/checkout/paybox-ipn">
                                        <input type="hidden" name="order_amount" value="<?php echo $totalsum['Multiply']; ?>">
                                        <input type="hidden" name="customer_email" value="<?php //echo $_SESSION['customer_email']; ?>">
                                        <th><button type="submit" name="paybox_card" class="btn btn-success" id="paycardButton">Pay With Bank Card</button></th>
                                        <th><button type="submit" name="paybox_momo" class="btn btn-success" id="paymomoButton">Pay With Momo</button></th>
                                    </form>
                                    <div class='modal' id='second-modal' data-backdrop='static' data-keyboard='false'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <button type='button' class='btn-second-modal-close close'><span aria-hidden='true'>&times;</span></button>
                                                </div>
                                                <div class='modal-body' name="momo">
                                                    <form id='formid' action='../actions/PBpaymentProcess.php' method='POST' class='row g-3' enctype='multipart/form-data'>
                                                    <input type="hidden" name="crop_name" value="<?php echo $cart['crop_name'];?>">
                                                    <input type="hidden" name="date" value="<?php echo date("Y-M-D");?>">
                                                    <input type="hidden" name="qty" value="<?php echo $cart['qty'];?>">
                                                    <input type="hidden" name="order_amount" value="<?php echo $totalsum['Multiply']; ?>">
                                                    <input type="hidden" name="customer_email" value="<?php echo $_SESSION['customer_email']; ?>">
                                                        <div class='col-12'>
                                                            <label>Email Address</label>
                                                            <input type='text' name='customer_email' id='customer_email' class='form-control' placeholder='someone@example.com'>
                                                        </div>

                                                        <br>
                                                        <div class='col-12'>
                                                            <p>Please select your network for Payment:</p>
                                                              <input type="radio" id="mtn" name="network" class='form-control' value="MTN">
                                                              <label for="MTN">MTN</label><br>
                                                              <input type="radio" id="vodafone" name="network" class='form-control' value="Vodafone">
                                                              <label for="Vodafone">Vodafone</label><br>
                                                              <input type="radio" id="airteltigo" name="network" class='form-control' value="AirtelTigo">
                                                              <label for="AirtelTigo">AirtelTigo</label>
                                                        </div>

                                                        <br>
                                                        <div class='col-12'>
                                                            <label>MOMO number</label>
                                                            <input type="tel" name='customer_contact' id='customer_contact' class='form-control' placeholder='0000000000'>
                                                        </div>

                                                        <div class='col-12'>
                                                            <label>Total Amount</label>
                                                            <input type='text' name='order_amount' id='order_amount' class='form-control' placeholder="<?php echo $totalsum['Multiply']; ?>" value="<?php echo $totalsum['Multiply']; ?>">
                                                        </div>

                                                        <div class='form-group mt-3'>
                                                            <input type="hidden" name="customer_id" value="<?php echo $custId; ?>">
                                                            <!-- <button type="submit" name="paybox_momoSubmit" class="btn btn-success" id="payButton">Pay</button> -->
                                                            <input type='submit' class='btn btn-success' name='paybox_momoSubmit' value='Submit'>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn-second-modal-close btn btn-default'>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            </tbody>
                    </table>
                </table>
            </table>
        </div>
    </main>
    <?php require("./footer.php"); ?>
</body>
<!-- embed script -->
<script>
    const payButton = document.getElementById('paymomoButton');

    payButton.addEventListener('click', () => {
        if ($custId == NULL) { // replace 'userLoggedIn' with your logic to check if the user is logged in
            window.location.href = '../Login/login.php'; // replace '/login' with the URL of your login page
        }
    });
    // Get references to the paymomoButton and paycardButton elements
    document.getElementById("paymomoButton").addEventListener("click", function(event) {
        event.preventDefault(); // prevent the default behavior of form submission
        $('#second-modal').modal('show'); // show the modal
    });
    const paycardButton = document.getElementById("paycardButton");

    // Get references to the modal and form elements
    const modal = document.getElementById("second-modal");
    const form = document.getElementById("paymentForm");


    // Add a click event listener to the paymomoButton
    paymomoButton.addEventListener("click", () => {
        // Display the modal
        modal.style.display = "block";
    });

    // Add a click event listener to the paycardButton
    paycardButton.addEventListener("click", () => {
        // Display the form
        form.style.display = "block";
    });

    // document.querySelector('#paymentForm').addEventListener('submit', function(event) {
    //     // Prevent the form from submitting normally
    //     event.preventDefault();

    //     // Get the values from the form fields
    //     // var name = document.getElementById("name").value;
    //     // var email = document.getElementById("email").value;

    //     // Get the form data
    //     var form = document.querySelector('#paymentForm');
    //     var formData = new FormData(form);

    //     // Send the form data to the action page using AJAX
    //     var xhr = new XMLHttpRequest();
    //     xhr.open('POST', '../actions/PBpaymentProcess.php');
    //     xhr.onload = function() {
    //         // Handle the response from the action page
    //         console.log(xhr.responseText);
    //     };
    //     xhr.send(formData);
    // });
</script>


<script src="https://widget.paybox.com.co/js/app.js" defer></script>

</html>