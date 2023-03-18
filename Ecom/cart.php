<?php
include("../settings/core.php");
include("../controllers/cart_controller.php");
include("../function/function.php");

$custId = get_id();
// echo $custId;
$all_cartproducts = view_cart_ctr($custId);
$ip_add = getIPAddress();
$total = 0;

$merchant_id = "#e476bf07-dffb-43bc-a8ae-a42be8be9c02";
$api_key = "e476bf07-dffb-43bc-a8ae-a42be8be9c02";

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
                                    <form method="post" action="../actions/PBpaymentProcess.php" id="paymentForm">
                                        <input type="hidden" name="customer_id" value="<?php echo $custId; ?>">
                                        <input type="hidden" name="merchant_id" value="<?php echo $merchant_id; ?>">
                                        <input type="hidden" name="order_id" value="<?php echo $order_id(); ?>">
                                        <input type="hidden" name="description" value="Order payment">
                                        <input type="hidden" name="return_url" value="https://www.example.com/checkout/thank-you">
                                        <input type="hidden" name="cancel_url" value="https://www.example.com/checkout/cancel">
                                        <input type="hidden" name="notify_url" value="https://www.example.com/checkout/paybox-ipn">
                                        <input type="hidden" name="order_amount" value="<?php echo $totalsum['Multiply']; ?>">
                                        <input type="hidden" name="customer_email" value="<?php echo $_SESSION['customer_email']; ?>">
                                        <th><button type="submit" name="paybox_submit" class="btn btn-success" id="payButton">Pay</button></th>
                                    </form>
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
    document.querySelector('#paymentForm').addEventListener('submit', function(event) {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Get the form data
        var form = document.querySelector('#paymentForm');
        var formData = new FormData(form);

        // Send the form data to the action page using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../actions/PBpaymentProcess.php');
        xhr.onload = function() {
            // Handle the response from the action page
            console.log(xhr.responseText);
        };
        xhr.send(formData);
    });
</script>


<script src="https://widget.paybox.com.co/js/app.js" defer></script>

</html>