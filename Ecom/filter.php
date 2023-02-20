<?php
require("../controllers/crop_controller.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>

    <style>
        .filter-component {
            margin-bottom:
                10px;
        }

        .filter-component label {
            font-weight:
                bold;
            margin-right:
                10px;
        }

        .filter-select {
            width:
                200px;
            height:
                30px;
            font-size:
                14px;
        }
    </style>
</head>

<body>
    <!-- 
    <li style="color: #333;font-size: 12px;font-family: 'Roboto', sans-serif;">
        <label class="checkbox">
            <input type="checkbox" id="check" name="id" value=<?php echo $row['id']; ?>>
            <?php //echo $row[''];
            ?>
        </label>
    </li> -->


    </label>
    <!-- HTML code for the filter component -->
    <div class="filter-component">
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
        <br>
    </div>

</body>
<script>
    // Get the selected category value
    var categoryFilter = $('#category-filter').val();

    // Loop through the products and show/hide based on the selected category
    $('.product-item').each(function() {
        var category = $(this).data('category');
        if (categoryFilter === 'all' || category === categoryFilter) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    // Add an event listener to update the products when the category filter is changed
    $('#category-filter').on('change', function() {
        categoryFilter = $(this).val();
        $('.product-item').each(function() {
            var category = $(this).data('category');
            if (categoryFilter === 'all' || category === categoryFilter) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
</script>

</html>