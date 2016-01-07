<?php
if (!$logged_in) {

    $session->redirect("/member-area/login/");
}
$content_path = "./member_tpl.php";


