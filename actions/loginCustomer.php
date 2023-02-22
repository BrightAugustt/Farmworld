<?php
include_once '../controllers/contact_controller.php';

if (isset($_POST['logincus'])) {
    $customer_email = $_POST['customer_email'];
    $customer_pass=$_POST["customer_pass"];
    $login =loginCustomer_ctr($customer_email);


    if($login != false){
        if (password_verify($customer_pass,$login['customer_pass']) and $login['user_role']==1 ){

                  session_start();
                   $_SESSION['customer_pass']= $login['customer_pass'];
                   $_SESSION['customer_name'] = $result['cname'];
                   $_SESSION['customer_email'] = $result['cemail'];
                   $_SESSION['user_role'] = 1;
                   $_SESSION['customer_id'] = $login['customer_id'] ;
                     // redirect to login
                        header('Location:../view/homepage.php');
        }

        else if (password_verify($customer_pass,$login['customer_pass']) and $login['user_role']==2){
            session_start();

            $_SESSION['customer_pass']= $login['customer_pass'];
            $_SESSION['custmer_name'] = $login['cname'];
            $_SESSION['customer_email'] = $login['cemail'];
            $_SESSION['user_role'] = $login['user_role'];
            $_SESSION['customer_id'] = $login['customer_id'];
            // redirect to login
               header('Location:../aeo/aeo.php');
        }

        else if (password_verify($customer_pass,$login['customer_pass']) and $login['user_role']==3){
            session_start();

            $_SESSION['customer_pass']= $login['customer_pass'];
            $_SESSION['custmer_name'] = $login['cname'];
            $_SESSION['customer_email'] = $login['cemail'];
            $_SESSION['user_role'] = $login['user_role'];
            $_SESSION['customer_id'] = $login['customer_id'];
            // redirect to login
               header('Location:../admin/admin.php');
        }
        


        else{
            session_start();
$_SESSION['error']='Invalid credentials';
            header('Location:../Login/login.php');
        }
                }
                else{
                    session_start();
$_SESSION['error']='Invalid credentials';
                    header('Location:../Login/login.php');
                }
    


}


    // $password = password_hash($_POST['customer_pass'], PASSWORD_DEFAULT); 
    // $user_role = 1;

    //  var_dump($fname, $lname, $number, $country, $email, $password, $user_role);
    // $result = add_record_ctr($fname, $lname, $number, $region, $email, $password, $user_role);
    // if ($result == true) {
    //     header('Location: ../homepage.php');
    // } else {
    //     echo 'error';
    // }
// }

?>
