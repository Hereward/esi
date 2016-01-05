<!-- Carousel
================================================== -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">



        <? foreach ($carousel->slides as $slide) { ?>
            <? $img_url = $slide->slide_image->url; ?>

            <div class="item <?=($sc==1)?'active':'';?>">
                <img class="second-slide visible-lg-inline" src="<?=$img_url?>" alt="slide">
                <img class="second-slide visible-md-inline" src="<?=$img_url?>" alt="slide">
                <img class="second-slide visible-xs-inline visible-sm-inline" src="<?=$img_url?>" alt="slide">
                <div class="container">
                    <div class="carousel-caption">
                        <?=$page->headline?>

                        <!-- <h1>Example headline.</h1> -->

                        <!-- <p>Note: If you're viewing this page via a  URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p> -->

                       <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                    </div>

                </div>
            </div>

            <? $sc++ ?>
        <? } ?>



<? /*
        <div class="item active">
            <img class="first-slide visible-lg-inline" src="https://placehold.it/3000X1000" alt="First slide">
            <img class="first-slide visible-md-inline" src="https://placehold.it/1000X500" alt="First slide">
            <img class="first-slide visible-xs-inline visible-sm-inline" src="https://placehold.it/800X400" alt="First slide">
            <div class="container">
                <!--
                src="$my_assets/images/slides/slide_1.jpg"
                <div class="carousel-caption">

                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
                -->
            </div>
        </div>
        <div class="item">
            <img class="second-slide visible-lg-inline" src="https://placehold.it/3000X1000" alt="Second slide">
            <img class="second-slide visible-md-inline" src="https://placehold.it/1000X500" alt="Second slide">
            <img class="second-slide visible-xs-inline visible-sm-inline" src="https://placehold.it/800X400" alt="Second slide">
            <div class="container">

            </div>
        </div>
        <div class="item">
            <img class="third-slide visible-lg-inline" src="https://placehold.it/3000X1000" alt="Third slide">
            <img class="third-slide visible-md-inline" src="https://placehold.it/1000X500" alt="Third slide">
            <img class="third-slide visible-xs-inline visible-sm-inline" src="https://placehold.it/800X400" alt="Third slide">
            <div class="container">

            </div>
        </div>
*/ ?>
    </div>
</div><!-- /.carousel -->