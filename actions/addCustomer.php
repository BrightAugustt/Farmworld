<?php
include_once '../controllers/contact_controller.php';




if (isset($_POST['insertcustomer'])) {

     /**
     *Check if the passwords math
     *if they do, register the user
     *else retrun an error message
     **/
    $fname=$_POST['customer_fname'];
    $lname=$_POST['customer_lname'];
    $number=$_POST['customer_contact'];
    $region=$_POST['customer_region'];
    $email=$_POST['customer_email'];
    $unecryptpass=$_POST['customer_pass'];
    $password=password_hash($unecryptpass, PASSWORD_DEFAULT); 
    $confirmpass=$_POST['cpass'];
    $user_role = 1;

    if($unecryptpass==$confirmpass){
        $result=add_record_ctr($fname, $lname, $number, $region, $email, $password, $user_role);
        if ($result == true) {
            header('Location:../login/login.php');
        } else{
            session_start();
            $_SESSION['error']='User credential failed, try again!';
            header('Location:../Login/register.php');
        }
    }
    //  var_dump($fname, $lname, $number, $country, $email, $password, $user_role);

}

?>
