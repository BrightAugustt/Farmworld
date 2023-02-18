<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="addcustomer.js"></script>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Create Account</h2>
            <form id="formid" action="../actions/addCustomer.php" method="POST">
                <div class="form-floating">
                    <label>First Name</label>
                    <input type="text" name="customer_fname" id="customer_fname" class="form-control" placeholder="First Name" pattern="[A-Za-z]+">
                </div>
                <div class="form-floating">
                    <label>Last Name</label>
                    <input type="text" name="customer_lname" name="customer_lname" class="form-control" placeholder="Last Name" pattern="[A-Za-z]+">
                </div>
                <div class="form-floating">
                    <label>Contact Number</label>
                    <input type="tel" name="customer_contact" id="customer_contact" class="form-control" placeholder="Contact" pattern="^\d{10}$">
                </div>
                <div class="form-floating">
                    <label>Region</label>
                    <input type="text" name="customer_region" id="customer_region" class="form-control" placeholder="Region">
                </div>
                <div class="form-floating">
                    <label>Email address</label>
                    <input type="text" name="customer_email" id="customer_email" class="form-control" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
                <div class="form-floating">
                    <label>Password</label>
                    <input type="password" name="customer_pass" id="customer_pass" class="form-control" placeholder="Password"  pattern=".{6,}">
                </div>

                <div class="form-floating">
                    <label> Confirm Password</label>
                    <input type="password" name="cpass" id="customer_pass" class="form-control" placeholder=" Confirm Password"  pattern=".{6,}">
                </div>

                <div class="button">
                <button class="button1" id="butcustomer" name="insertcustomer" onclick="formsubmit()" >Sign up as a customer</button>
                <p>OR</p>
                <button class="button2" id="butaeo" name="insertaeo">Sign up as an AEO</button>
                </div>
                <div class="already">
                    <p>Already have an account? <span class="login"><a href="login.php" class="login">Login Here</a></span></p>
                </div>
            </form>
        </div>
    </div>


    <!-- <script>
    $(document).ready(function(){
        $('#formid').submit(function(e){
            e.preventDefault();
        
        var form = $(this);
        var actionUrl = form.attr('action');
        
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            dataType: "json",
            success:function(data){
                // Process with the response data
                alert("Form Submitted Successfully")
            }
        });
        });
    });
    </script> -->
    <!-- <script>
        $("#butcustomer").click(function(ev) {
			  var form = $("#formid");
			  var url = form.attr('../actions/addCustomer.php');
				$.ajax({
				  type: "POST",
				  url: url,
				  data: form.serialize(),
				  success: function(data) {
					// Ajax call completed successfully
					alert("Form Submited Successfully");
				  },
				  error: function(data) {
					  // Some error in ajax call
					  alert("some Error");
				  }
			  });
			  
		  });

          $("#butaeo").click(function(ev) {
			  var form = $("#formid");
			  var fname = $("#fname").val();
			  var fnumber = $("#fnumber").val();
			  var url = form.attr('./actions/adduser.php');
			  if (fname!="" && fnumber!=""){
				$.ajax({
				  type: "POST",
				  url: url,
				  data: form.serialize(),
				  success: function(data) {
						
					// Ajax call completed successfully
					alert("Form Submited Successfully");
				  },
				  error: function(data) {
						
					  // Some error in ajax call
					  alert("some Error");
				  }
			  });
			  }else{
				alert("Please fill all the flield");
			  }
			  
		  });
    </script> -->
</body>
</html>