<div class="container-fluid">
    <div class="featurettes">
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
    <div class="featurettes">
        <div class="row featurette member_area">
            <div class="sub-container">

                <div class="col-xs-12">
                    <h2 class="featurette-heading featurette-heading-big">Forms</h2>
                </div>

                <div class="form_grid_container clearfix">
                    <div class="col-sm-3">
                        <div class="form_grid"><img class="img-responsive" src="<?=$my_assets?>/images/icons/pf_icon.png" alt="<?=$page->proposal_form_pdf->description?>"></div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form_grid"><div class="form_grid_item"><?=$page->proposal_form_pdf->description?></div></div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form_grid"><div class="form_grid_item"><img class="img-responsive" src="<?=$my_assets?>/images/icons/download_icon.png" alt="download"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





