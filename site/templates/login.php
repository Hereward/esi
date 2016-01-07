<?
$content_path = "./login_tpl.php";
$fu = $modules->get('FrontendUser');
//$useMain = false;
//$body_style = 'background-color:#da4c56;color:white;';

//$session->CSRF->resetToken();
$fu->login();
$fu->process("/member-area/");
//echo $fu->render();
?>








