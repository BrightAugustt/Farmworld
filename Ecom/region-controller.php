<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $destination = $_POST['region'];

  switch ($destination) {
    case 'Greater Accra':
      header('Location: gAccra.php');
      break;
    case 'Eastern':
      header('Location: eastern.php');
      break;
    default:
      echo 'Invalid destination selected.';
      break;
  }
  exit;
}
?>