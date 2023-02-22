<?php
    function getIPAddress(){
        //Checking if IP Address is from a shared Internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip_add = $_SERVER['HTTP_CLIENT_IP'];
        }

        //Check if IP is shared
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_add = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        //whether IP is from the remote address
        else {
            $ip_add = $_SERVER['REMOTE_ADDR'];
        }
        return $ip_add;
    }
?>