<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <div class="flex-container">
        <div class="info">
            <h3>Welcome to Farm-a-World</h3>
            <p>
            Lorem ipsum dolor sit amet consectetur. Maecenas aliquam nulla integer et dictumst leo consequat dapibus orci. Ut porta aliquet cursus sit lorem. elerisque in sapien dignissim velit amet Lorem ipsum dolor sit amet sectetur. Maecenas aliquam nulla integer et dictumst leo consequat dapibus orci. Ut porta aliquet cursus sit lorem. Scelerisque in sapien dignissim velit amet 
            </p>
        </div>

        <div class="form">
            <h3>Create an account</h3>
            <form action="" method="POST" id="formId">
            <div class="form-floating">
                <label>Your First Name</label>
                <input type="text" name="customer_fname" id="customer_fname" class="form-control">
            </div>
            <div class="form-floating">
                <label>Your Last Name</label>
                <input type="text" name="customer_lname" name="customer_lname" class="form-control">
            </div>
            <div class="form-floating">
                <label>Contact Number</label>
                <input type="text" name="customer_contact" id="customer_contact" class="form-control">
            </div>
            <div class="form-floating">
                <label>Region</label>
                <input type="text" name="customer_region" id="customer_region" class="form-control">
            </div>
            <div class="form-floating">
                <label>Email address</label>
                <input type="text" name="customer_email" id="customer_email" class="form-control">
            </div>
            <div class="form-floating">
                <label>Password</label>
                <input type="password" name="customer_pass" id="customer_pass" class="form-control">
            </div>

            <div class="button">
            <button class="button1" id="butcustomer" >Sign Up as a customer</button>
            <p>OR</p>
            <button class="button2" id="butaeo">Sign Up as an AEO</button>
            </div>

            <div class="already">
                <p>Already have an account?<span><a href="login.php">Login Here</a></span></p>
            </div>
        
            </form>

        </div>
    </div>
    <script>
        $("#butcustomer").click(function(ev) {
			  var form = $("#formId");
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

          $("#butaeo").click(function(ev) {
			  var form = $("#formId");
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
    </script>
</body>
</html>