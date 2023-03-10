<?php
include("../settings/core.php");
include("../controllers/cart_controller.php");
include("../function/function.php");


$custId = get_id();
// echo $custId;
$all_cartproducts = view_cart_ctr($custId);
$ip_add = getIPAddress();
$total = 0;
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
                                    <form id="paymentForm">
                                        <input type="hidden" id="amount" value="<?php //echo $totalsum['Multiply']; ?>">
                                        <input type="hidden" id="email" value="<?php //echo $_SESSION['customer_email']; ?>">
                                        <th><button type="submit" class="btn btn-success">Pay</button></th>
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

</html>