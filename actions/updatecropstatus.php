<?php
//making action  aware of controller
include("../controllers/product_controller.php");

//collect form data
if (isset($_POST['check'])) {

    $crop_id=$_POST['crop_id'];
    $fstatus=$_POST['check'];
    $status;
    // var_dump($crop_id,$fstatus);
    if($fstatus == 'Yes'){
        $status='No';
    }else{
        $status='Yes';
    }

    if(update_statuscrops_ctr($crop_id,$status) == True){
        header('Location:../admin/allProducts.php');
    }







// 	$id=$_POST['id'];
// 	$status=$_POST['ss'];
// 	$fstatus;
// 	if($status=='Yes'){
// $fstatus='No';
// 	}
// 	else{
// 	$fstatus='Yes';	
// 	}
// 	if(update_advert_ctr($id,$fstatus)==True){
// 		header('Location:../Admin/advertisment.php');
// 	}
	
}



?>