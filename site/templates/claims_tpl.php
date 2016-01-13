



<div class="container-fluid">
    <div class="featurettes claims first">
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
                        <!--
                        <img class="img-responsive" src="<?=$page->tile_image->url?>" alt="product image">
                        -->
                    </div>

                </div>

            </div>
    </div>
</div>


<div class="container-fluid">
    <div class="featurettes claims">
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
    <div class="featurettes claims">
        <div class="row featurette grey">
            <div class="sub-container">
                <div class="col-xs-12 col-sm-6">
                    <div class="featurette_left_content">
                        <img class="img-responsive" src="<?=$page->tile_image->url?>" alt="<?=$page->tile_image->description?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="featurette_centerer">
                        <div class="featurette_centered featurette_right_content">
                                <h2 class="featurette-heading"><?=$page->tile_title?>?</h2>
                                <?=$page->tile_text?>
                                <div class="claims_download first">
                                    <div><a href="/"><img class="img-responsive" src="<?=$page->pdf_image->eq(0)->url?>" alt="<?=$page->pdf_image->eq(0)->description?>"></a></div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid">
    <div class="featurettes claims last">
        <div class="row featurette">
            <div class="sub-container">
                <div class="col-xs-12 col-sm-6">
                        <div class="featurette_left_content">
                            <h2 class="featurette-heading"><?=$page->examples_title?></h2>
                            <?=$page->examples_description?>
                        </div>
                </div>

                <div class="col-xs-12 col-sm-6">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="featurettes claims last">
        <div class="row featurette">
            <div class="sub-container">
                <div class="col-xs-12 col-sm-6">
                    <div class="featurette_left_content">
                        <h2 class="featurette-heading"><?=$page->claims_example_title_1?></h2>
                        <?=$page->claims_example_description_1?>
                        <div class="claims_example_grid"><img class="img-responsive" src="<?=$page->claims_example_grid_image_1->url?>" alt="<?=$page->claims_example_grid_image_1->description?>"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="featurette_right_content">
                        <h2 class="featurette-heading"><?=$page->claims_example_title_2?></h2>
                        <?=$page->claims_example_description_2?>
                        <div class="claims_example_grid"><img class="img-responsive" src="<?=$page->claims_example_grid_image_2->url?>" alt="<?=$page->claims_example_grid_image_2->description?>"></div>
                    </div>


                    <? /*
                    <img class="img-responsive" src="<?=$page->claims_example_image_1->url?>" alt="<?=$page->claims_example_image_1->description?>">
                    */ ?>


                </div>
            </div>
        </div>
    </div>
</div>







