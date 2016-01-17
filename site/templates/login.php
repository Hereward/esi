<?

$inc_contact_info = false;
$content_path = "./login_tpl.php";

//$session->CSRF->resetToken();



//$fu = $modules->get('FrontendUser');

if ($input->post->username) {
    /*
    $fu->login(array('username', 'password'));

    $fieldUser = $fu->form->get('username');
    wire()->addHookBefore('FrontendUser::auth', function($event) {
        $email = wire('fu')->form->fhValue('username', 'email');
        $loginUser = wire('users')->get("email={$email}");

        if ($loginUser instanceof User && !$loginUser->isGuest()) {
            $userObj = $event->arguments[0];
            $userObj->name = $loginUser->name;
        }
    });

    $fu->process("/member-area/");

    */


    $loginUser = '';
    $email = $input->post->username;
    $loginUser = wire('users')->get("email={$email}");
    $result = $this->session->login($loginUser->name,$input->post->password);
    if ($result) {
        $session->redirect("/member-area/");
        //return true;
    } else {
        $session->redirect("/");
    }

}


$navbar_class = "navbar_static";
$taskbar_class = "taskbar_static";

//echo $fu->render();
?>








