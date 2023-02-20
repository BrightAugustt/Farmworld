<!-- <form method="POST" action="">
  <label for="colors">Select colors:</label>
  <select name="colors[]" multiple>
    <option value="red">Red</option>
    <option value="green">Green</option>
    <option value="blue">Blue</option>
  </select>
  <input type="submit" value="Filter">
</form> -->

<li style="color: #333;font-size: 12px;font-family: 'Roboto', sans-serif;">
    <form method="get">
        <label>Select your filters:</label><br>
        <input type="checkbox" id="check" name="filters[]" value="Product A"> Filter 1<br>
        <input type="checkbox" id="check" name="filters[]" value="Product B"> Filter 2<br>
        <input type="checkbox" id="check" name="filters[]" value="Product C"> Filter 3<br>
        <input type="checkbox" id="check" name="filters[]" value="Product D"> Filter 4<br>
        <input type="submit" id="findTasks" value="Apply Filters">
    </form>
</li>

<script>
    $('#findTasks').click(function(event){
        event.preventDefault();
        var action = 'searchTask';
        var arr = [];
        $.each($("input[name='filters[]']:checked"), function(){
            arr.push($(this).val());
        })
    });
</script>



</div>
<!-- <li style="color: #333;font-size: 12px;font-family: 'Roboto', sans-serif;"> -->
    <!-- <label class="checkbox">
            <input type="checkbox" id="check" name="id" value=<?php //echo $row['id']; ?>>
            <?php //echo $row[''];
            ?>
        </label> -->
<!-- </li> -->


<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $selected_colors = $_POST['colors'];

//   // Use the selected colors to filter the data
//   // ...
// }

// $items = [
//     ['name' => 'Item 1', 'color' => 'red'],
//     ['name' => 'Item 2', 'color' => 'green'],
//     ['name' => 'Item 3', 'color' => 'blue'],
//     ['name' => 'Item 4', 'color' => 'red'],
//   ];

//   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $selected_colors = $_POST['colors'];

//     // Filter the items by the selected colors
//     $filtered_items = array_filter($items, function($item) use ($selected_colors) {
//       return in_array($item['color'], $selected_colors);
//     });
//   }

//   // Display the filtered items
//   foreach ($filtered_items as $item) {
//     echo $item['name'] . ' - ' . $item['color'] . '<br>';
//   }

?>