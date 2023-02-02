<?php
//connect to the user account class
include_once(dirname(__FILE__)) . '/../classes/product_class.php';


function add_catrecord_ctr($catname)
{
    // create an instance of the Product class
    $class_instance = new product_class();
    // call the method from the class
    return $class_instance->add_catrecord_cls($catname);
}

function add_productrecord_ctr($pcategory, $pbrand, $ptitle, $pprice, $pdesc, $file, $pkeywords)
{
    // create an instance of the Product class
    $class_instance = new product_class();
    // call the method from the class
    return $class_instance->add_productrecord_cls($pcategory, $pbrand, $ptitle, $pprice, $pdesc, $file, $pkeywords);
}


function get_all_productrecords_ctr()
{
    //create an instance of the class
    $item_object = new product_class();

    //run the method
    $item_records = $item_object->get_all_productrecords_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function get_all_catrecords_ctr()
{
    //create an instance of the class
    $item_object = new product_class();

    //run the method
    $item_records = $item_object->get_all_catrecords_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function get_all_orderrecords_ctr()
{
    //create an instance of the class
    $item_object = new product_class();

    //run the method
    $item_records = $item_object->get_all_orderrecords_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}


function get_one_productrecord_ctr($pid)
{
    //create an instance of the class
    $item_object = new product_class();

    //run the method
    $item_records = $item_object->get_one_productrecord_cls($pid);

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_one();
    } else {
        //no data found
        return false;
    }
}

function search_for_one_product_ctr($searchkeys)
{
    $one_product = new product_class();
    return $one_product->search_for_one_product_cls($searchkeys);
}


function get_one_catrecord_ctr($cid)
{
    //create an instance of the class
    $item_object = new product_class();

    //run the method
    $item_records = $item_object->get_one_catrecord_cls($cid);

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_one();
    } else {
        //no data found
        return false;
    }
}

function update_catrecord_ctr($id, $name)
{
    // create an instance of the Product class
    $class_instance = new product_class();
    // call the method from the class
    return $class_instance->update_catrecord_cls($id, $name);
}

function update_productrecord_ctr($pid, $pcategory, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkeywords)
{
    // create an instance of the Product class
    $class_instance = new product_class();
    // call the method from the class
    return $class_instance->update_productrecord_cls($pid, $pcategory, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkeywords);
}

function delete_productrecord_ctr($id)
{
    // create an instance of the Product class
    $class_instance = new product_class();
    // call the method from the class
    return $class_instance->delete_productrecord_cls($id);
}


function delete_catrecord_ctr($id)
{
    // create an instance of the Product class
    $class_instance = new product_class();
    // call the method from the class
    return $class_instance->delete_catrecord_cls($id);
}

function delete_cartrecord_ctr($pid)
{
    // create an instance of the Product class
    $class_instance = new product_class();
    // call the method from the class
    return $class_instance->delete_cartrecord_cls($pid);
}


function delete_orderrecord_ctr($oid)
{
    // create an instance of the Product class
    $class_instance = new product_class();
    // call the method from the class
    return $class_instance->delete_orderrecord_cls($oid);
}


