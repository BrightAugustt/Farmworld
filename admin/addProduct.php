<?php
require("../controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Crop</title>
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
                    <h2 class="mt-5">Create Crop Record</h2>
                    <p>Please fill this form and submit to add new Crop record to the database.</p>
                    <form action="../actions/addProduct.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="crop_cat" class="form-label"> Select Category</label>
                            <select name='crop_cat'>

                                <?php
                                $cat = get_all_catrecords_ctr();

                                foreach ($cat as $contact) {
                                ?>
                                    <option value=<?php echo ($contact['cat_id']) ?>><?php echo ($contact['cat_name']) ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="crop_name">Enter Crop Name</label>
                            <input type="text" name="crop_name">
                        </div>

                        <div class="form-group">
                            <label for="farmer_name">Enter Harvesteer's name</label>
                            <input type="text" required name="farmer_name" min="0" value="0" step="any">
                        </div>

                        <div class="form-group">
                            <label for="crop_desc">Enter Crop Description</label>
                            <input type="textarea" name="crop_desc">
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