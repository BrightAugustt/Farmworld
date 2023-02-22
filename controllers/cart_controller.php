<?php
//connect to the user account class
require_once(dirname(__FILE__)) . '/../classes/cart_class.php';

//--INSERT--//
// add to cart
function add_to_cart_ctr($pid, $ip_address, $cid, $qty){
    $insert= new cart_class();
    return $insert->add_to_cart_cls($pid, $ip_address, $cid, $qty);
}

function insert_order_ctr($cid,$p_invoice,$date,$orderStatus){
  $select= new cart_class();
  return $select->insert_order_cls($cid,$p_invoice,$date,$orderStatus);
}

function orderid_ctr(){
  $select= new cart_class();
  return $select->orderid_cls();
}

function orderdate_ctr(){
  $select= new cart_class();
  return $select->orderdate_cls();
}

function insert_payment_ctr($p_amount, $cid, $orderid, $orderdate){
  $select= new cart_class();
  return $select->insert_payment_cls($p_amount, $cid, $orderid, $orderdate);
}

//--SELECT--//
//view cart
function select_all_cart_ctr($ip_address,$cid){
  $select= new cart_class();
  return $select->select_all_cart_cls($ip_address,$cid);
}

// function to check for duplicate
function dup_cart_qty_ctr($pid, $cid){
  $duplicate= new cart_class();
  return $duplicate->dup_cart_qty_cls($pid, $cid);
}

// function to check for duplicate
function view_cart_ctr($customer_id){
  $duplicate= new cart_class();
  return $duplicate->view_cart_cls($customer_id);
}


//--UPDATE--//
function update_cart_qty_ctr($pid, $cid, $qty){
  $update= new cart_class();
  return $update->update_cart_qty_cls($pid, $cid, $qty);
}


// //--DELETE--//
function delete_cart_record_ctr($pid,$cid)
{
    // create an instance of the Product class
    $class_instance = new cart_class();
    // call the method from the class
    return $class_instance->delete_from_cart_cls($pid,$cid);
}

function totalPrice_ctr($cid)
{
    // create an instance of the Product class
    $class_instance = new cart_class();
    // call the method from the class
    return $class_instance->multiplyPrice($cid);
}

function cart_details_ctr($cid){
  $select= new cart_class();
  return $select->cart_details_cls($cid);
}

function insert_order_details_ctr($orderid,$pid,$qty){
  $select= new cart_class();
  return $select->insert_order_details_cls($orderid,$pid,$qty);
}

//--DELETE--//
function del_cart_ctr($cid){
  $select= new cart_class();
  return $select->del_cart_cls($cid);
}

?>