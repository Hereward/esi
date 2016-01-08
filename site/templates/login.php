<?
$content_path = "./login_tpl.php";
//$fu = $modules->get('FrontendUser');
//$useMain = false;
//$body_style = 'background-color:#da4c56;color:white;';

//$session->CSRF->resetToken();



//$fu->login();
//$fu->process("/member-area/");




//echo $fu->render();



$fu = $modules->get('FrontendUser');
$fu->login(array('username', 'password'));

$fieldUser = $fu->form->get('username');
$fieldUser->addHookBefore('FrontendUser::auth', function($event) {
    $email = wire('fu')->form->fhValue('username', 'email');
    $loginUser = wire('users')->get("email={$email}");

    if ($loginUser instanceof User && !$loginUser->isGuest()) {
        $userObj = $event->arguments[0];
        $userObj->name = $loginUser->name;
    }
});

$fu->process("/member-area/");
//echo $fu->render();
?>








