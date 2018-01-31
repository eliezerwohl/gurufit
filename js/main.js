jQuery(document).ready(function($) {


jQuery("#freeSubmit").on("click", function() {
  var url = window.location.origin + "/gurufit/test.php"; // the script where you handle the form input.
  jQuery.ajax({
    type: "POST",
    url: url,
    data: jQuery("#freeForm").serialize(), // serializes the form's elements.
    success: function(data) {
      $(".input-front, .modal-footer").fadeOut("fast", function(){
        $(".thank").fadeIn("fast");
      })
      console.log(data); // show response from the php script.
    }
  });
});
});
