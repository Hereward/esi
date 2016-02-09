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
                            <div class="featurette_centered <?=($tc % 2 == 0)?'featurette_right_content':'featurette_left_content';?>">
                                <h2 class="featurette-heading"><?=$tile->tile_title?></h2>
                                <?=$tile->tile_text?>
                                <? if ($tc == 2) { ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="featurette_button"><a class="btn btn-default btn-lg" href="/products/" role="button">See our products</a></div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="featurette_button"><a class="btn btn-default btn-lg" href="#" role="button">Request a quote</a></div>
                                    </div>
                                </div>
                                <? } else if ($tc == 3) { ?>
                                    <div class="featurette_button"><a class="btn btn-default btn-lg" href="/claims/" role="button">Learn More</a></div>
                                <? } ?>
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


    </div>
</div>
<!-- /END THE FEATURETTES -->




    <div class="container-fluid callout_2">

            <div class="row first">
                <div class="sub-container">
                    <div class="col-sm-5">
                        <p style="margin-right:20px;" class="pull-right"><img src="<?=$my_assets?>/images/icons/phone_icon.png" alt="Phone icon"></p>
                    </div>
                    <div class="col-sm-7">
                        <p style="margin-left:20px;" class="pull-left">Give us a call today. <br><strong><?=$settings->company_1300_phone_number?></strong></p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="sub-container">
                    <div class="col-sm-5">
                        <p style="margin-right:20px;" class="pull-right"><img src="<?=$my_assets?>/images/icons/mail_icon.png" alt="Email icon"></p>
                    </div>
                    <div class="col-sm-7">
                        <p style="margin-left:20px;" class="pull-left">Write to us. <br><strong><?=$settings->company_email?></strong></p>
                    </div>
                </div>

            </div>

    </div>
