<?php
include("../settings/core.php");
include("../controllers/cart_controller.php");
include("../function/function.php");

$all_cartproducts = view_cart_ctr($_SESSION["customer_id"]);
$cids = $_SESSION["customer_id"];
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
            img{
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
            <a class="btn btn-primary" href="../Views/shop.php" role="button">Continue Shopping</a>
            <h1 style="text-align: center;"><u> Items in Cart</u></h1>

            <table class="container mt-5 d-flex justify-content-center">
                <table class="table table-bordered w-30">
                    <table class="table table-striped">
                        <thread>
                            <tr>
                                <th>Product Image </th>
                                <th>Product Title</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Manage Quantity</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_cartproducts as $key => $cart) {
                                    $totals = $total + ($cart['qty'] * $cart['product_price']);
                                    echo "
                                    <tr>
                                    <td><img src='./../images/productImages/{$cart['product_image']}' style = height:100px; width:100px;></td>
                                    <td>{$cart['product_title']}</td>
                                    <td>{$cart['qty']}</td>
                                    <td>{$cart['product_price']}</td>
                                    <td>$totals</td>
                                    <td>
                                    <form class='form-inline' method='POST' action='../Actions/manage_cartQty.php'>
                                        <input class='form-control mr-sm-2' type='hidden' value='$ip_add' name='ip_address'>
                                        <input class='form-control mr-sm-2' type='hidden' value='{$_SESSION["customer_id"]}' name='customer_id'>
                                        <input class='form-control mr-sm-2' type='hidden' name='product_id' value ='{$cart['product_id']}'>
                                        <input class='form-control mr-sm-2' name='quantity' type='number' placeholder='Quantity' aria-label='Quantity'>
                                        <input type='submit' class='btn-btn primary' name='updateQty' value='Update'>
                                    </form>
                                    </td>
                                    <td>
                                    <a href='../Actions/deletefromCart.php?product_id={$cart['product_id']}'data-toggle='tooltip'><i class='fa fa-trash' style='color:red'></i></a>
                                    </td>
                                    <br>
                                    </tr> ";
                                }

                                ?>
                                <?php $totalsum = totalPrice_ctr($cids); ?>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Subtotal: <?php echo $totalsum['Multiply']; ?></th>
                                    <form id="paymentForm">
                                        <input type="hidden" id="amount" value="<?php echo $totalsum['Multiply']; ?>">
                                        <input type="hidden" id="email" value="<?php echo $_SESSION['customer_email'] ?>">
                                        <th><button type="submit" onclick="payWithPaystack()" class="btn btn-success">Pay</button></th>
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