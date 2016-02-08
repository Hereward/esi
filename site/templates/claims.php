<?php


$claim_form = $pdfs->get("description*='Claim Form'");
$show_claims_bg = true;
$url = $page->background_image->url;
$bg_style = "background:url($url) no-repeat;";

$content_path = "./claims_tpl.php";

