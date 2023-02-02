<?php
require("../controllers/contact_controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
    <script src="../js/validation.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Customer Record</h2>
                    <p>Please fill this form and submit to add a new Customer record to the database.</p>
                    <form action="../actions/addCustomer.php" method="POST" name="register" id="register" onSubmit="return formValidation()">
                        <div class="form-floating">
                            <label>Your First Name</label>
                            <input type="text" name="customer_fname" id="customer_fname" class="form-control">
                        </div>
                        <div class="form-floating">
                            <label>Your Last Name</label>
                            <input type="text" name="customer_lname" name="customer_lname" class="form-control">
                        </div>
                        <div class="form-floating">
                            <label>Contact Number</label>
                            <input type="text" name="customer_contact" id="customer_contact" class="form-control">
                        </div>
                        <div class="form-floating">
                            <label>Country</label>
                            <input type="text" name="customer_country" id="customer_country" class="form-control">
                        </div>
                        <div class="form-floating">
                            <label>Email address</label>
                            <input type="text" name="customer_email" id="customer_email" class="form-control">
                        </div>
                        <div class="form-floating">
                            <label>Password</label>
                            <input type="password" name="customer_pass" id="customer_pass" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-primary" name="insertBtn" value="Submit">
                            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>