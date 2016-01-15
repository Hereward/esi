<?

$fu = $modules->get('FrontendUser');

if ($input->post->username) {
    $useMain = false;

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
    $response = $fu->process("/");
    echo $response;

} else {
   // $content_path = "./login_tpl.php";
   // $navbar_class = "navbar_static";
   // $taskbar_class = "taskbar_static";
    echo '';
}
?>








