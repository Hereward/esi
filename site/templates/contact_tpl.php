

<div class="container-fluid">
    <div class="featurettes">
            <div class="row featurette grey">
                <div class="sub-container">
                    <div class="col-xs-12 col-sm-6">
                        <div class="featurette_centerer">
                            <div class="featurette_centered">
                                <h2 class="featurette-heading featurette-heading-big"><?=$page->headline?></h2>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <img class="img-responsive" src="<?=$page->tile_image->url?>" alt="product image">
                    </div>
                </div>
            </div>
    </div>
</div>


<div class="container-fluid">
    <div class="featurettes contact">
        <div class="row featurette">
            <div class="sub-container">
                <div class="col-xs-12 col-sm-6">

                    <h2 class="featurette-heading"><?=$page->content_heading?></h2>
                    <h2>Head Office</h2>
                    <?=$settings->company_address?>
                    <h2>WA Office</h2>
                    <?=$settings->company_address_2?>
                    <h2>Vic Office</h2>
                    <?=$settings->company_address_3?>




                </div>

                <div class="col-xs-12 col-sm-6">

                    <div class="callout_2">
                        <div class="row first">
                            <div class="col-sm-3">
                                <p style="margin-right:20px;" class="pull-right"><img src="<?=$my_assets?>/images/icons/phone_icon.png" alt="Phone icon"></p>
                            </div>
                            <div class="col-sm-9">
                                <p style="margin-left:20px;" class="pull-left">Call us. <br><strong><?=$settings->company_1300_phone_number?></strong></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <p style="margin-right:20px;" class="pull-right"><img src="<?=$my_assets?>/images/icons/mail_icon.png" alt="Email icon"></p>
                            </div>
                            <div class="col-sm-9">
                                <p style="margin-left:20px;" class="pull-left">Write to us. <br><strong><?=$settings->company_email?></strong></p>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

</div>


<div class="container-fluid">
    <div class="sub-container">
        <div class="col-xs-12">
            <div style="text-align: center;">
                <img class="img-responsive" src="<?=$page->map_image->url?>" alt="map image">
            </div>
        </div>
    </div>
</div>






