var current = 0;
var section = jQuery(".section");
jQuery(".next").on("click", function() {
  section[current].style.display = "none";
  section[current + 1].style.display = "block";
  current++;
  mirror();
})

function mirror(){
  var className = "mirror-" + (current + 1);
  var mirrored =  document.getElementsByClassName(className);
  document.getElementById("mirror").innerHTML = mirrored[0].innerText ;
}
jQuery(".mirrorBtn").on("click", function(){
  mirror()
})

jQuery(".prev").on("click", function(){
  console.log(current);
  section[current].style.display = "none";
  section[current - 1].style.display = "block";
  current--;
  mirror()
})

jQuery(".submit").on("click", function() {
  var url = window.location.origin + "/test.php"; // the script where you handle the form input.
  jQuery.ajax({
    type: "POST",
    url: url,
    data: jQuery("#theForm").serialize(), // serializes the form's elements.
    success: function(data) {
      jQuery(".section, #mirror").hide();
      jQuery(".thank").show();

    }
  });
});
