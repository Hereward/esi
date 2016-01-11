

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
    <div class="featurettes products">
        <div class="row featurette">
            <div class="sub-container">
                <div class="col-xs-12 col-sm-6">

                            <h2 class="featurette-heading"><?=$page->content_heading?></h2>
                            <?=$page->body?>


                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="featurette_callout">
                        <?=$page->callout_text?>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


<div class="container-fluid">
    <div class="featurettes products">
        <div class="row featurette grey">
            <div class="sub-container">
                <div class="col-xs-12 col-sm-6">
                    <img class="img-responsive" src="<?=$page->policy_features_image->url?>" alt="policy features image">
                </div>

                <div class="col-xs-12 col-sm-6">
                        <div class="featurette_right_content">
                            <h2 class="featurette-heading"><?=$page->policy_features_heading?></h2>
                            <?=$page->policy_features_text?>

                        </div>




                </div>
            </div>
        </div>
    </div>

</div>






