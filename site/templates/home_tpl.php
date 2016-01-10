<div style="background-size:cover; background-image:url(<?=$my_assets?>/images/general/pink_gradient.png)" class="container-fluid callout_1">
    <div class="row">
        <div class="sub-container">
            <div class="col-lg-12">
                <?=$page->callout_text?>
            </div>
        </div>
    </div>
</div>








<div class="container-fluid">
    <div class="featurettes">

        <? $tc = 1; ?>
        <? foreach($page->tiles as $tile) { ?>

            <div class="row featurette <?=($tc % 2 == 0)?'even':'';?>">
                <div class="sub-container">
                    <? if ($tc % 2 == 0) { ?>
                        <div class="col-xs-12 col-sm-6 hidden-xs">
                            <img class="img-responsive" src="<?=$tile->tile_image->url?>" alt="Generic placeholder image">
                        </div>
                    <? } ?>
                    <div class="col-xs-12 col-sm-6">
                        <div class="featurette_centerer">
                            <div class="featurette_centered">
                                <h2 class="featurette-heading"><?=$tile->tile_title?></h2>
                                <?=$tile->tile_text?>
                                <div class="featurette_button"><a class="btn btn-default btn-lg" href="#" role="button">Learn More</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 <?=($tc % 2 == 0)?'visible-xs-inline':'';?>">
                        <img class="img-responsive" src="<?=$tile->tile_image->url?>" alt="Generic placeholder image">
                    </div>

                </div>
            </div>

            <? $tc++ ?>
        <? } ?>
        <!--
            <div class="row featurette">
                <div class="sub-container">
                    <div class="col-xs-12 col-sm-6">
                        <div class="featurette_centerer">
                            <div class="featurette_centered">
                                <h2 class="featurette-heading">Working with the strata experts.</h2>
                                <p>
                                    Expert understands how important it is for you as a strata manager and your clients to be provided with leading advice and support to get the cover that is right for them. With a commitment to building long-term relationships with our strata managers, our goal is to work with our clients to provide the support and expertise needed to make things easy.
                                </p>
                                <p>
                                    Our team consists of highly experienced strata insurance professionals who have an in-depth understanding of strata insurance and the legislation within each state that affects it. Expert is positioned to provide market leading, specialist strata cover that protects the body corporate beyond their minimum legislative obligations.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <img class="img-responsive" src="https://placehold.it/558X630" alt="Generic placeholder image">
                    </div>
                </div>
            </div>


            <div style="background-color:#ededed;" class="row featurette even">
                <div class="sub-container">
                    <div class="col-xs-12 col-sm-6 hidden-xs">
                        <img class="img-responsive" src="https://placehold.it/558X630" alt="Generic placeholder image">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="featurette_centerer">
                            <div class="featurette_centered">
                                <h2 class="featurette-heading">Everything you need and nothing you don’t.</h2>
                                <p>We understand your responsibilities can be very complex and demanding. We at Expert will make your strata insurance requirements something simple.</p>
                                <p>Whether the strata plans you manage are residential, commercial or mixed strata, Expert can provide you with a quote, Australia-wide. We offer a top class, comprehensive package of covers that include many additional and optional benefits to meet your client’s needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 visible-xs-inline">
                        <img class="img-responsive" src="https://placehold.it/558X630" alt="Generic placeholder image">
                    </div>
                </div>



            </div>


            <div class="row featurette">
                <div class="sub-container">
                    <div class="col-xs-12 col-sm-6">
                        <div class="featurette_centerer">
                            <div class="featurette_centered">
                                <h2 class="featurette-heading">We’ve got you covered.</h2>
                                <p>When choosing insurance, premium is a major determining factor, but the policy wording and the manner in which claims are handled will determine how your choice of insurer performs. With Expert you’re not just getting high quality insurance cover but also the promise that we will deliver when you submit an eligible claim to ensure your claim is paid as soon as possible, and your client is satisfied.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <img class="img-responsive" src="https://placehold.it/558X630" alt="Generic placeholder image">
                    </div>
                </div>
            </div>




    -->

    </div>
</div>
<!-- /END THE FEATURETTES -->




    <div class="container-fluid callout_2">
        <div class="sub-container">
            <div class="row first">
                <div class="col-sm-5">
                    <p style=margin-right:20px;" class="pull-right"><img src="<?=$my_assets?>/images/icons/phone.jpg" alt="Phone icon"></p>
                </div>
                <div class="col-sm-7">
                    <p style=margin-left:20px;" class="pull-left">Give us a call today. <br><?=$settings->company_1300_phone_number?></p>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-5">
                    <p style=margin-right:20px;" class="pull-right"><img src="<?=$my_assets?>/images/icons/mail.jpg" alt="Email icon"></p>
                </div>
                <div class="col-sm-7">
                    <p style=margin-left:20px;" class="pull-left">Write to us. <br><?=$settings->company_email?></p>
                </div>

            </div>
            <!--
            <div class="row">
                <div class="col-md-3 col-md-offset-3 col-lg-2 col-lg-offset-4">
                    <p><img src="<?=$my_assets?>/images/icons/mail.jpg" alt="Email Logo"></p>
                </div>
                <div class="col-md-6 col-lg-6">
                    <p>Write to us. <br>info@esi.com.au</p>
                </div>
            </div>
            -->
        </div>
    </div>
