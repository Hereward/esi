<?
$content_path = "./register_tpl.php";
$fu = $modules->get('FrontendUser');
$fu->register();
$fu->process("/login/");
?>








