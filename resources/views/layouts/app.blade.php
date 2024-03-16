<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Uma's Authentic Kitchen</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="img/favicon.png" sizes="16x16">
    <link href="css/sk-default.css" id="cpswitch" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="font/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="font/font/flaticon.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/mega_menu.css"/>
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css"/>
    <link href="css/animate.html" rel="stylesheet">
    <!-- <link href="css/tilt.css" rel="stylesheet" type="text/css"> -->
    <link href="css/carousel.min.css" rel="stylesheet">
    
    <link href="css/transitions.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/image-grid.css"/>
    <!-- <script type="text/javascript" src="js/modernizr.custom.26633.js"></script> -->
    <noscript>
        <link rel="stylesheet" type="text/css" href="css/fallback.css"/>
    </noscript>
</head>
<body>
    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-long-arrow-up"></i></a></div>
        <div id="loading"> <div id="preloader"></div></div>
        <div id="wrapper"> 
            @include('partials._header')
            <!--Header ends here-->
            @yield( 'content' )
 
                    
            @include('partials._footer')
        </div>
        <!-- wrapper ends here -->
<script src="js/ajax.js"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script src="js/wow.min.html"></script>
<script type="text/javascript">
new WOW().init();
</script> 

<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
<script type="text/javascript">
$(function(){$( '#ri-grid' ).gridrotator({rows: 3,columns: 15,animType: 'fadeInOut',animSpeed: 1000,interval: 600,step: 1,w320:{rows: 3,columns: 4},w240:{rows: 3,columns: 4}});});
</script> 

<!-- <script type="text/javascript">
$('.counter-num').each(function(){var $this=$(this), 
countTo=$this.attr('data-count'); 
$({countNum: $this.text()}).animate({countNum: countTo},
{duration: 100000, 
    easing:'linear', 
    step: function(){$this.text(Math.floor(this.countNum));}, 
    complete: function(){$this.text(this.countNum);
</script>  -->

<script type="text/javascript" src="js/mega_menu.js"></script> 
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="js/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="js/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="js/revolution-custom.js"></script> 
<script type="text/javascript" src="js/custom-slider.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 

<!-- Clients scroll -->
<!-- <script type="text/javascript">
$('.bxslider').bxSlider({minSlides: 2, maxSlides: 5, slideWidth: 234, auto:true});
</script> -->

<!-- Gallery scroll -->
<script>
$(".bxslider").bxSlider({minSlides:1,maxSlides:8,slideWidth:279,slideMargin:0,ticker:!0,speed:9e4})
</script>

<!-- <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script> -->
<script type="text/javascript" src="js/main.js"></script>

<!-- <script type="text/javascript">
(function(){var tiltSettings=[{},];function init(){var idx=0;[].slice.call(document.querySelectorAll('a.tilter')).forEach(function(el, pos){idx=pos%2===0 ? idx+1 : idx;new TiltFx(el, tiltSettings[idx-1]);});}
</script> -->

<!-- <script type="text/javascript">
$(document).keydown(function (event) {
if (event.keyCode == 123) { // Prevent F12
    return false;
} else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
    return false;
}
});

$(document).on("contextmenu", function (e) {        
e.preventDefault();
});
</script> -->
</body>
</html>            