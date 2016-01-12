<?php
if (!$logged_in) {

    $session->redirect("/member-area/login/");
}
$content_path = "./member_tpl.php";

$navbar_class = "navbar_static";
$taskbar_class = "taskbar_static";


