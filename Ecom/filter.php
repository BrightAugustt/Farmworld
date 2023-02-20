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

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 
    <li style="color: #333;font-size: 12px;font-family: 'Roboto', sans-serif;">
        <label class="checkbox">
            <input type="checkbox" id="check" name="id" value=<?php echo $row['id']; ?>>
            <?php //echo $row[''];
            ?>
        </label>
    </li> -->

    <!-- <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="filter-component">
                        <label for="category-filter">Category:</label>
                        <select id="category-filter" class="filter-select">
                            <option value="all">All Categories</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothing">Clothing</option>
                            <option value="books">Books</option>
                           Add more categories here
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Filter</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->



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