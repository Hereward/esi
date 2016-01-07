<?php


$carousel = $pages->get("/carousel/");
$sc = 1;
$inc_carousel = true;
$carousel_navbar_class = ($logged_in)?' navbar-carousel_logged_in_home':' navbar-carousel_logged_out_home';


$content_path = "./home_tpl.php";

/*
ob_start();
include("./home_tpl.php");
$content = ob_get_contents();
ob_end_clean();
*/

