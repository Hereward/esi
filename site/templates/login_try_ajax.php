<?

//$fu = $modules->get('FrontendUser');
$output = '';
if ($input->post->username) {
    $useMain = false;

    /*
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
    */

    $loginUser = '';
    $email = $input->post->username;
    $loginUser = wire('users')->get("email={$email}");
    $result = $this->session->login($loginUser->name,$input->post->password);
    if ($result) {
        //$session->redirect("/member-area/");
        //return true;
        $output = '{"status":"1"}';
    } else {
        //$session->redirect("/");
        $output = '{"status":"0"}';
    }
}

echo $output;
?>








