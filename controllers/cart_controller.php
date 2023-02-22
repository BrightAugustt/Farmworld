<?php
//connect to the user account class
require_once(dirname(__FILE__)) . '/../classes/cart_class.php';

//--INSERT--//
// add to cart
function add_to_cart_ctr($prodId, $ip_address, $custId, $qty){
    $insert= new cart_class();
    return $insert->add_to_cart_cls($prodId, $ip_address, $custId, $qty);
}

function insert_order_ctr($custId,$invoice,$date, $orderStatus){
  $select= new cart_class();
  return $select->insert_order_cls($custId,$invoice,$date, $orderStatus);
}

function orderid_ctr(){
  $select= new cart_class();
  return $select->orderid_cls();
}

function orderdate_ctr(){
  $select= new cart_class();
  return $select->orderdate_cls();
}

function insert_payment_ctr($p_amount, $custId, $orderid, $orderdate){
  $select= new cart_class();
  return $select->insert_payment_cls($p_amount, $custId, $orderid, $orderdate);
}

//--SELECT--//
//view cart
function select_all_cart_ctr($ip_address,$custId){
  $select= new cart_class();
  return $select->select_all_cart_cls($ip_address,$custId);
}

// function to check for duplicate
function dup_cart_qty_ctr($crpId, $custId){
  $duplicate= new cart_class();
  return $duplicate->dup_cart_qty_cls($crpId, $custId);
}

// function to check for duplicate
function view_cart_ctr($customer_id){
  $duplicate= new cart_class();
  return $duplicate->view_cart_cls($customer_id);
}


//--UPDATE--//
function update_cart_qty_ctr($crpId, $custId, $qty){
  $update= new cart_class();
  return $update->update_cart_qty_cls($crpId, $custId, $qty);
}


// //--DELETE--//
function delete_cart_record_ctr($crpId,$custId)
{
    // create an instance of the Product class
    $class_instance = new cart_class();
    // call the method from the class
    return $class_instance->delete_from_cart_cls($crpId,$custId);
}

function totalPrice_ctr($custId)
{
    // create an instance of the Product class
    $class_instance = new cart_class();
    // call the method from the class
    return $class_instance->multiplyPrice($custId);
}

function cart_details_ctr($custId){
  $select= new cart_class();
  return $select->cart_details_cls($custId);
}

function insert_order_details_ctr($orderid,$crpid,$qty){
  $select= new cart_class();
  return $select->insert_order_details_cls($orderid,$crpid,$qty);
}

//--DELETE--//
function del_cart_ctr($custId){
  $select= new cart_class();
  return $select->del_cart_cls($custId);
}

?>