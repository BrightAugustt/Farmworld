 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     

 </head>

 <body>
 <div class='modal' id='second-modal' data-backdrop='static' data-keyboard='false'>
     <div class='modal-dialog'>
         <div class='modal-content'>
             <!-- <div class='modal-header'>
                                                            <button type='button' class='btn-second-modal-close close'><span aria-hidden='true'>&times;</span></button>
                                                        </div> -->
             <div class='modal-body' name="momo">
                 <form id='formid' action='../actions/PBpaymentProcess.php' method='POST' class='row g-3' enctype='multipart/form-data'>
                     <input type="hidden" name="crop_name" value="<?php echo $cart['crop_name']; ?>">
                     <input type="hidden" name="date" value="<?php echo date("Y-M-D"); ?>">
                     <input type="hidden" name="total_qty" value="<?php echo $cart['total_qty']; ?>">
                     <input type="hidden" name="order_amount" value="<?php echo $totalsum['Multiply']; ?>">
                     <input type="hidden" name="customer_email" value="<?php echo $_SESSION['customer_email']; ?>">
                     <div class='col-12'>
                         <label>Email Address</label>
                         <input type='text' name='customer_email' id='customer_email' class='form-control' value="<?php echo $_SESSION['customer_email']; ?>" disabled>
                     </div>

                     <div class='col-12'>
                         <label>Location</label>
                         <input type='text' name='location' id='location' class='form-control' placeholder='6 Sesame St., Dansoman Accra-Ghana'>
                     </div>

                     <br>

                     <p>Please select your network for Payment:</p>
                     <div class=' form-check form-check-inline'>
                           <input class="form-check-input" type="radio" id="mtn inlineRadio1" name="network" class='form-control' value="MTN">
                           <label class="form-check-label" for="MTN">MTN</label>
                     </div>
                     <div class=' form-check form-check-inline'>
                         <input class="form-check-input" type="radio" id="vodafone inlineRadio1" name="network" class='form-control' value="Vodafone">
                          <label class="form-check-label" for="Vodafone">Vodafone</label><br>
                     </div>
                     <div class=' form-check form-check-inline'>
                         <input class="form-check-input" type="radio" id="airteltigo inlineRadio1" name="network" class='form-control' value="AirtelTigo">
                          <label class="form-check-label" for="AirtelTigo">AirtelTigo</label>
                     </div>
             </div>

             <br>
             <div class='col-12'>
                 <label>MOMO number</label>
                 <input type="tel" name='customer_contact' id='customer_contact' class='form-control' placeholder='0000000000'>
             </div>

             <div class='col-12'>
                 <label>Total Amount</label>
                 <input type='text' name='order_amount' id='order_amount' class='form-control' disabled placeholder="<?php echo $totalsum['Multiply']; ?>" value="<?php echo $totalsum['Multiply']; ?>">
             </div>

             <div class='form-group mt-3'>
                 <input type="hidden" name="customer_id" value="<?php echo $custId; ?>">

                 <input type='submit' class='btn btn-success' name='paybox_momoSubmit' style="margin-left: 20px; background-color:#16AD22;" value='Make Payment'>
             </div>
             <div class='modal-footer'>
                 <button type='button' class='btn-second-modal-close btn btn-default'>Close</button>
             </div>
         </div>
     </div>
 </div>
 </body>

 </html>
