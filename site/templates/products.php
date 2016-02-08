<?php

$content_path = "./products_tpl.php";

$proposal_form = $pdfs->get("description*='Proposal Form'");
$product_summary_guide = $pdfs->get("description*='Product Summary Guide'");
$one_page_flyer = $pdfs->get("description*='One Page Flyer'");

$downloads = array();
$downloads[] = array('icon'=>'pf_icon.png', 'pdf' => $proposal_form);
$downloads[] = array('icon'=>'g_icon.png', 'pdf' => $product_summary_guide);
$downloads[] = array('icon'=>'f_icon.png', 'pdf' => $one_page_flyer);

$navbar_class = "navbar_static";
$taskbar_class = "taskbar_static";

