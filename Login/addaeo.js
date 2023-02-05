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