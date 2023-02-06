function formsubmit() {
  var customer_fname = document.getElementById('customer_fname').value;
  var customer_lname = document.getElementById('customer_lname').value;
  var customer_contact = document.getElementById('customer_contact').value;
  var customer_region = document.getElementById('customer_region').value;
  var customer_email = document.getElementById('customer_email').value;
  var customer_pass = document.getElementById('customer_pass').value;
  //store all the submitted data in astring.
  var formdata = 'fname=' + customer_fname + '&customer_lname=' + customer_lname + '&customer_contact=' + customer_contact + '&customer_region=' + customer_region +'&customer_email=' + customer_email+ '&customer_pass=' + customer_pass;
// validate the form input
if (customer_fname == '' ) {
  alert("Please Enter Employee Name");
  return false;
}
if(customer_lname == '') {
  alert("Please Enter Email id");
  return false;
}
if(customer_contact == '') {
  alert("Please Enter Username");
  return false;
}
if(customer_region == '') {
  alert("Please Enter Password");
  return false;
}
if(customer_email == '') {
  alert("Please Enter Password");
  return false;
}
if(customer_pass == '') {
  alert("Please Enter Password");
  return false;
}
else {
// AJAX code to submit form.
$.ajax({
   type: "POST",
   url: "../actions/addCustomer.php", //call storeemdata.php to store form data
   data: formdata,
   cache: false,
   success: function(data) {
    alert("Form Submitted");
   }
});
}
return false;
}