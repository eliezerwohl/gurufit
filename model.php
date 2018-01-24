<div id="myModal" class="modal super-modal">
    <!-- The Close Button -->
    <span class="close-modal">&times;</span>
    <!-- Modal Content (The Image) -->
    <img class="modal-content super-modal-content" id="img01">
    <!-- Modal Caption (Image Text) -->
    <!--   <div id="caption"></div> -->
  </div>
////
<a href="#1">


////


.super-modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 400; /* Sit on top */
    padding-top: 100px;  Location of the box
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }
    /* Modal Content (Image) */
    .super-modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Add Animation - Zoom in the Modal */
    .super-modal-content, {
    animation-name: zoom;
    animation-duration: 0.6s;
    }
    @keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
    }
    /* The Close Button */
    .close-modal {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }
    .close-modal:hover,
    .close-modal:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }
    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .super-modal-content {
    width: 100%;
    }
    }
