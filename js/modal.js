var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementsByClassName('img-pop');
var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
for (var i = 0; i < img.length; i++) {
  console.log(img[i])
  img[i].onclick = function(){
    if (jQuery(window).width() < 767) {
      modal.style.display = "block";
      modalImg.src = this.src;
    } else {
      console.log('More than 960');
    }
  }
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-modal")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
