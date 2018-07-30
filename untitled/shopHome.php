<html>
<head>
    <title>Home</title>
    <?php
    include "links.php";
    ?>

</head>
<body style="background-color: white">
<!-- ============= including the  navbar ===== -->
<?php
include "shopingHeader.php";
?>

<!-- ============= crusel ===== -->
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner" style="width: 100%">
        <div class="carousel-item active">
            <img src="pics/1.png"  width="100%" height="90%">
            <div class="carousel-caption" style="justify-content: center">
                <h1 class="cru animated rollIn">Toyo</h1>
                <p class="cru-comment animated lightSpeedIn">Tires that you can relay on!</p><br>
                <div class="animated tada infinite">
                <a href="#" class="button1" tabindex="-1">
                    Shop Now
                </a>
                </div>


            </div>
        </div>


        <div class="carousel-item">
            <img src="pics/2.png" width="100%" height="90%">
            <div class="carousel-caption">
                <h3 class="cru animated rotateIn" >phillips</h3>
                <p class="cru-comment">We light your World!</p>
                <br>
                <div class="animated swing infinite">
                    <a href="#" class="button1" tabindex="-1">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>


        <div class="carousel-item">
            <img src="pics/3.png"  width="100%" height="90%">
            <div class="carousel-caption">
                <h3 class="cru">Smeg</h3>
                <p class="cru-comment">New Arrival!</p><br>
                <div class="animated swing infinite">
                    <a href="#" class="button1" tabindex="-1">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>


        <div class="carousel-item">
            <img src="pics/4.png"  width="100%" height="90%">
            <div class="carousel-caption">
                <h3 class="cru">BOSCH</h3>
                <p class="cru-comment">Thank you, BOSCH!</p><br>
                <div class="animated swing infinite">
                    <a href="#" class="button1" tabindex="-1">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<!-- ============= divs ===== -->
<div class="" style="background-color: white">
<div class="container-fluid">
    <div class="row" style="margin-top: 30px">
        <!-- left  div space -->
        <div class="col-lg-1 col-md-1 col-sm-1" ></div>

        <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="row">
                <!-- col 1 -->
                <div class="col-sm-10 col-md-8 col-lg-4 blockimg">
                    <!-- block1 -->
                    <div class="block1 embed-responsive" style="margin-top: 30px">
                        <img src="pics/Untitled-2.png" class=" img-zoom" alt="IMG-BENNER" style="height:450px;width:350px">

                        <div class="btn-div" >
                            <!-- Button -->
                            <a href="#" class="button2">
                                KITCHEN
                            </a>
                        </div>
                    </div>
                    <!-- block2 -->
                    <div class="block1 embed-responsive " style="margin-top: 30px">
                        <img src="pics/tire.png" class=" img-zoom" alt="IMG-BENNER" style="height:320px;width:350px">

                        <div class="btn-div" >
                            <!-- Button -->
                            <a href="#" class="button2">
                                TIRES
                            </a>
                        </div>
                    </div>

                </div>

                <!-- col 2 -->
                <div class="col-sm-10 col-md-8 col-lg-4 blockimg" style="margin-top: 30px">
                                    <!-- block1 -->
                    <div class="block1 embed-responsive " >
                        <img src="pics/lighting.png" class=" img-zoom" alt="IMG-BENNER" style="height:320px;width:350px">

                        <div class="btn-div" >
                            <!-- Button -->
                            <a href="#" class="button2">
                                LIGHTING
                            </a>
                        </div>
                    </div>

                    <!-- block2 -->
                    <div class="block1 embed-responsive" style="margin-top: 30px">
                        <img src="pics/outdoor2.png" class=" img-zoom" alt="IMG-BENNER" style="height:450px;width:350px">

                        <div class="btn-div" style="margin-left: 38px " >
                            <!-- Button -->
                            <a href="#" class="button2">
                                OUTDOOR FURNITURE
                            </a>
                        </div>
                    </div>

                </div>


                <!-- col 3 -->
                <div class="col-sm-10 col-md-8 col-lg-4 blockimg">
                    <!-- block1 -->
                    <div class="block1 embed-responsive" style="margin-top: 30px">
                        <img src="pics/electro.png" class=" img-zoom" alt="IMG-BENNER" style="height:450px;width:350px">

                        <div class="btn-div" >
                            <!-- Button -->
                            <a href="#" class="button2">
                               ELECTRONICS
                            </a>
                        </div>
                    </div>
                    <!-- block2 -->
                    <div class="block1 embed-responsive " style="margin-top: 30px">
                        <img src="pics/battery.png" class=" img-zoom" alt="IMG-BENNER" style="height:320px;width:350px">

                        <div class="btn-div" >
                            <!-- Button -->
                            <a href="#" class="button2">
                                BATTERY
                            </a>
                        </div>
                    </div>

                </div>



            </div><!-- row-->
            <!-- right  div space -->
        </div>

        <div class="col-lg-1 col-md-1 col-sm-1"></div>
    </div>
</div>

<!-- ===================== featured  product ================== -->
    <div class="page-header" style="justify-content: center ; background-color: white">
    <div style="top:80px" >
        <h3 class="fetured">featured products </h3>
    </div>

        <div class="slider multiple-items slick-initialized slick-slider slick-dotted" role="toolbar"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2805px; transform: translate3d(-561px, 0px, 0px);" role="listbox"><div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 187px;">
                        <h3>7</h3>
                    </div><div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 187px;">
                        <h3>8</h3>
                    </div><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 187px;">
                        <h3>9</h3>
                    </div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide10" style="width: 187px;">
                        <h3>1</h3>
                    </div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide11" style="width: 187px;">
                        <h3>2</h3>
                    </div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide12" style="width: 187px;">
                        <h3>3</h3>
                    </div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide13" style="width: 187px;">
                        <h3>4</h3>
                    </div><div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide14" style="width: 187px;">
                        <h3>5</h3>
                    </div><div class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide15" style="width: 187px;">
                        <h3>6</h3>
                    </div><div class="slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide16" style="width: 187px;">
                        <h3>7</h3>
                    </div><div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide17" style="width: 187px;">
                        <h3>8</h3>
                    </div><div class="slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide18" style="width: 187px;">
                        <h3>9</h3>
                    </div><div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 187px;">
                        <h3>1</h3>
                    </div><div class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 187px;">
                        <h3>2</h3>
                    </div><div class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 187px;">
                        <h3>3</h3>
                    </div></div></div>








            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button><ul class="slick-dots" style="display: block;" role="tablist"><li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation10" id="slick-slide10"><button type="button" data-role="none" role="button" tabindex="0">1</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation11" id="slick-slide11"><button type="button" data-role="none" role="button" tabindex="0">2</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation12" id="slick-slide12"><button type="button" data-role="none" role="button" tabindex="0">3</button></li></ul></div>


    </div>



<!-- slick -->



</body>
</html>


