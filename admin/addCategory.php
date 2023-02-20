<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Category Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Category Record</h2>
                    <p>Please fill this form and submit to add new Category record to the database.</p>
                    <form action="../actions/addCategory.php" method="post">
                        <div class="form-group">
                            <label for="cat_name">Enter Category Name</label>
                            <input type="text" name="cat_name">
                        </div>
                        <input type="submit" name="insertBtn" class="btn btn-primary" value="Submit">
                        <a href="productCat.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>