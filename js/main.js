jQuery(document).ready(function($) {
  function carouselNormalization() {
  var items = $('#qoutes .item'), //grab all slides
    heights = [], //create empty array to store height values
    tallest; //create variable to make note of the tallest slide

  if (items.length) {
    function normalizeHeights() {
      items.each(function() { //add heights to array
        heights.push($(this).height());
      });
      tallest = Math.max.apply(null, heights); //cache largest value
      items.each(function() {
        $(this).css('min-height', tallest + 'px');
      });
    };
    normalizeHeights();

    $(window).on('resize orientationchange', function() {
      tallest = 0, heights.length = 0; //reset vars
      items.each(function() {
        $(this).css('min-height', ''); //reset min-height
      });
      normalizeHeights(); //run it again
    });
  }
}
carouselNormalization()

function ieFix() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
      $(".carousel-container").hide()
        // IE 10 or older => return version number
       
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
       $(".carousel-container").hide()
    
    }
}
ieFix()
jQuery("#freeSubmit").on("click", function() {
  var url = window.location.origin + "/test.php"; // the script where you handle the form input.
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
