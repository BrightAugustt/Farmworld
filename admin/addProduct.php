<?php
require("../Controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
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
                    <h2 class="mt-5">Create Product Record</h2>
                    <p>Please fill this form and submit to add new Product record to the database.</p>
                    <form action="../Actions/addProduct.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="product_cat" class="form-label"> Select Category</label>
                            <select name='product_cat'>

                                <?php
                                $cat = get_all_catrecords_ctr();

                                foreach ($cat as $contact) {
                                ?>
                                    <option value=<?php echo ($contact['cat_id']) ?>><?php echo ($contact['cat_name']) ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_title">Enter Crop Name</label>
                            <input type="text" name="product_title">
                        </div>

                        <div class="form-group">
                            <label for="product_price">Enter Product Price</label>
                            <input type="number" required name="product_price" min="0" value="0" step="any">
                        </div>

                        <div class="form-group">
                            <label for="product_desc">Enter Product Description</label>
                            <input type="textarea" name="product_desc">
                        </div>

                        <div class="form-group">
                            <label for="product_image">Upload Product Image</label>
                            <input type="file" name="product_image" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label for="product_keywords">Enter Product Keywords</label>
                            <input type="text" name="product_keywords" placeholder="delicate, heavy">
                        </div>

                        <button type="submit" name="insertBtn" class="btn btn-primary">Submit</button></button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <a href="products.php"><button type="button" class="btn btn-secondary ml-2">Back to Dashboard</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>