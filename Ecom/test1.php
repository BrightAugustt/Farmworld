<?php
$products = [
    ['name' => 'Product A', 'color' => 'red', 'price' => 10],
    ['name' => 'Product B', 'color' => 'green', 'price' => 20],
    ['name' => 'Product C', 'color' => 'red', 'price' => 15],
    ['name' => 'Product D', 'color' => 'blue', 'price' => 30],
  ];

// Filter products by color
if (isset($_GET['filters[]'])) {
    $selected_colors = $_GET['filters[]'];
    $filtered_products = array_filter($products, function ($product) use ($selected_colors) {
        return in_array($product['color'], $selected_colors);
    });
} else {
    // No filters selected, show all products
    $filtered_products = $products;
}

// Display the filtered products
foreach ($filtered_products as $product) {
    echo $product['name'] . ' (' . $product['color'] . ', $' . $product['price'] . ')<br>';
}
?>