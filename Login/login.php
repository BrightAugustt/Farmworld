<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/validation.js"></script>
</head>
<body>
    <div class="container">
        <div class="form">
			
            <h2>Login to Account</h2>
					<?php
                    session_start();
                    if(!empty($_SESSION['error'])){
                    ?>
                    <div style = "color : red; font-weight:600;">
                    <?php
                        echo $_SESSION['error'];
                        
                        unset($_SESSION['error']); 
                    } 
                    ?>
            <form id="formId" action="../actions/loginCustomer.php" method="POST">
                <div class="form-floating">
                    <label>Email address</label>
                    <input type="text" name="customer_email" id="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="form-floating">
                    <label>Password</label>
                    <input type="password" name="customer_pass" id="pass" class="form-control" placeholder="Password" required>
                </div>

                <div class="button">
                <button class="button1" id="butcustomer" name="loginButton" >Login as a customer</button>
                <p>OR</p>
                <button class="button2" id="butaeo" name="loginButton">Login as an AEO</button>
                </div>

                <div class="already">
                    <p>Already have an account? <span class="login"><a href="register.php" class="login">Register Here</a></span></p>
                </div>
            </form>
        </div>
    </div>


    <!-- <script>
        $("#butcustomer").click(function(ev) {
			  var form = $("#formId");
			  var customer_email = $("#email").val();
			  var customer_pass = $("#pass").val();
			  var url = form.attr('./actions/addCustomer.php');
			  if (customer_email!="" && customer_pass!=""){
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
			  var url = form.attr('./actions/addaeo.php');
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