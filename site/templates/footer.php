<!-- FOOTER -->

<? if ($inc_contact_info) { ?>
<div class="contact_info">
        <div class="container-fluid">
        <div class="sub-container">
            <div class="row">
                <div class="col-md-6 col-lg-5 col-lg-offset-1">
                    <p><img src="<?=$settings->company_logo->eq(1)->url?>" alt="ESI Logo"></p>
                </div>
                <div class="col-md-3 col-lg-3">
                    <?=$settings->company_data?>
                </div>
                <div class="col-md-3 col-lg-3">
                    <?=$settings->company_address?>
                </div>
            </div>
        </div>

    </div>
</div>
<? } ?>


<footer>
        <div class="container-fluid">
        <div class="sub-container">
            <?=$settings->company_copyright?>
            <div style="margin-top:10px;">
                <?=$settings->company_terms?>
            </div>

        </div>
        </div>
</footer>
<!-- //FOOTER -->

