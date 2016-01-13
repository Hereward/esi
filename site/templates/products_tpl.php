

<div class="container-fluid">
    <div class="featurettes products_header">
        <div class="row featurette grey">
            <div class="sub-container clearfix">
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
                    <div class="featurette_centerer">
                        <div class="featurette_centered">
                    <h2 class="featurette-heading"><?=$page->content_heading?></h2>
                    <?=$page->body?>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="featurette_callout">
                        <div class="featurette_centerer">
                            <div class="featurette_centered">
                        <?=$page->callout_text?>
                    </div>
                </div>
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


<div class="container-fluid">
    <div class="featurettes products last">
        <div class="row featurette">
            <div class="sub-container">
                <div class="col-xs-12 col-sm-6">
                    <div class="featurette_left_content">
                        <h2 class="featurette-heading">Interested?</h2>
                        <p>Vestibulum eget aliquam velit. Duis efficitur, urna et congue pulvinar, justo leo consectetur massa, et sollicitudin massa lorem et dui. Vivamus fermentum, libero vel lacinia euismod, sem libero aliquam erat, vel vehicula risus lorem et libero.</p>

                        <div class="featurette_button"><a class="btn btn-default btn-lg" href="#" role="button">Click here to register</a></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="product_download first">
                        <div><a href="/"><img class="img-responsive" src="<?=$page->pdf_image->eq(0)->url?>" alt="<?=$page->pdf_image->eq(0)->description?>"></a></div>
                    </div>
                    <div class="product_download">
                        <div><a href="/"><img class="img-responsive" src="<?=$page->pdf_image->eq(1)->url?>" alt="<?=$page->pdf_image->eq(1)->description?>"></a></div>
                    </div>
                    <div class="product_download">
                        <div><a href="/"><img class="img-responsive" src="<?=$page->pdf_image->eq(2)->url?>" alt="<?=$page->pdf_image->eq(2)->description?>"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>






