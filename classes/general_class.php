<?php
namespace App;
//connect to database class
include_once(dirname(__FILE__)) . "../../settings/db_class.php";

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class general_class extends db_connection
{
	//--INSERT--//
	function aeo_count()
    {
        $sql = "SELECT COUNT(*) FROM `customer` WHERE user_role=2";
        return  $this->fetchOne($sql);
    }

	function customer_count()
    {
        $sql = "SELECT COUNT(*) FROM `customer` WHERE user_role=1";
        return  $this->fetchOne($sql);
    }

	function sales_count()
    {
        $sql = "SELECT COUNT(*) FROM `orders`";
        return  $this->fetchOne($sql);
    }

	function crops_count()
    {
        $sql = "SELECT COUNT(*) FROM `crops`";
        return  $this->fetchOne($sql);
    }
	
	

}

?>