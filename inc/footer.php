<?php
?>
<style>
    .white-layer.white-layer-with-overlay {
        padding-top: 25px;
        padding-bottom: 25px;
        border-radius: 25px;
    }

    .container {
        overflow-x: hidden;
    }

    .redeem-wraper {
        z-index: 2;
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        .white-layer.white-layer-with-overlay {
            padding-top: 81px;
            padding-bottom: 125px;
            border-radius: 25px 25px 0 0;
        }
    }
@media screen and (-webkit-min-device-pixel-ratio:0) { 
  .common-plus-wrap { display: block; } 
} 
.class2{
     color:black !important;    
}
</style>
</div>
<div class="floating-chat">
    <img class="img-fluid ico" src="img/bot.gif">
    <div class="chat">
        <div class="header">
            <span class="title">
                Chat Bot <small>BETA</small>
            </span>
            <button>
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
                         
        </div>
        <ul class="messages">
            <li class="bot">hi, how may I help you?</li>
        </ul>
        <div class="footer">
            <div class="text-box" contenteditable="true" data-text="Type your question" disabled="true"></div>
            <button id="sendMessage"><img class="img-fluid" src="img/send-button.svg"></button>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/app.min.js"></script>
<script src="//stgteach.practically.com/teacherwebsite/js/teacher/custom.js"></script>
<script src="//stgteach.practically.com/teacherwebsite/js/teacher/owl.carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/chat.js"></script>



<script>
$(document).ready(function() {
	$(".owl-carousel").owlCarousel({
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		itemsMobile : [479, 1.3],
		center: true,
		nav:true,
		loop:true,
		autoWidth:false,
		navigation:true,
		navigationText: [
		   "<i class='fa fa-chevron-left'></i>",
		   "<i class='fa fa-chevron-right'></i>"
		]
	});
});

</script>
<!-- <style>
#javascriptflashmessage{
	font-size: 15px;
}

.float {
    position: fixed;
    height: 70px;
    background: white;
    width: 70px;
    bottom: 40px;
    line-height: 15px;
    right: 5%;
    color: #FFF;
    border-radius: 50px;
    z-index: 1000;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
}
</style>
<a class="float">
          <img class="img-fluid" src="img/bot.gif">
                </a> -->

