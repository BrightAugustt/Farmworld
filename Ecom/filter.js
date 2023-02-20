// Get the filter options
var filterOptions = {
    category: $('#category-filter').val(),
    price: $('#price-filter').val(),
    brand: $('#brand-filter').val(),
    color: $('#color-filter').val()
};

// Loop through the products and hide those that don't match the filter options
$('.product-item').each(function() {
    var product = $(this);
    var category = product.data('category');
    var price = product.data('price');
    var brand = product.data('brand');
    var color = product.data('color');

    if ((filterOptions.category !== 'all' && category !== filterOptions.category) ||
        (filterOptions.price !== 'all' && price > filterOptions.price) ||
        (filterOptions.brand !== 'all' && brand !== filterOptions.brand) ||
        (filterOptions.color !== 'all' && color !== filterOptions.color)) {
        product.hide();
    } else {
        product.show();
    }
});

// Update the filter options when a filter is changed
$('.filter-select').change(function() {
    filterOptions[$(this).attr('name')] = $(this).val();
    $('.product-item').show();
    $('#no-results').hide();
    // Call the filtering function again with the updated filter options
    filterProducts(filterOptions);
});

// Function to filter the products based on the filter options
function filterProducts(filterOptions) {
    var productsVisible = $('.product-item:visible').length;
    $('.product-item').each(function() {
        var product = $(this);
        var category = product.data('category');
        var price = product.data('price');
        var brand = product.data('brand');
        var color = product.data('color');

        if ((filterOptions.category !== 'all' && category !== filterOptions.category) ||
            (filterOptions.price !== 'all' && price > filterOptions.price) ||
            (filterOptions.brand !== 'all' && brand !== filterOptions.brand) ||
            (filterOptions.color !== 'all' && color !== filterOptions.color)) {
            product.hide();
            productsVisible--;
        }
    });
    // Show a message if no products match the filter options
    if (productsVisible === 0) {
        $('#no-results').show();
    }
}