<?
header('Content-type: application/json');
$useMain = false;
$output = '';
$response_array = array();
$error_str = '';
$err_count = 0;
$errors = array();

/*
$form = $modules->get("InputfieldForm");

$form = $modules->get("InputfieldForm");
$form->action = "./";
$form->method = "post";
$form->attr("id+name",'subscribe-form');

$field = $modules->get("InputfieldText");
$field->label = "First Name";
$field->attr('id+name','firstname');
$field->required = 1;
$form->append($field);

$field = $modules->get("InputfieldText");
$field->label = "First Name";
$field->attr('id+name','lastname');
$field->required = 1;
$form->append($field);

$field = $modules->get("InputfieldEmail");
$field->label = "E-Mail";
$field->attr('id+name','email');
$field->required = 1;
$form->append($field);

$field = $modules->get("InputfieldPassword");
$field->label = "Password";
$field->attr("id+name","password");
$field->required = 1;
$form->append($field);

$submit = $modules->get("InputfieldSubmit");
$submit->attr("value","Subscribe");
$submit->attr("id+name","submit");
$form->append($submit);
$form->processInput($input->post);
*/

if ($input->post->submit) {

        $email = $sanitizer->email($input->post->email);

        $username = $sanitizer->pageName($email);

        $firstname = $sanitizer->text($input->post->firstname);
        $lastname = $sanitizer->text($input->post->lastname);
        $password = $input->post->password;


        if(strlen($username) != 0) {
           if (username_validation($username) == 0) {
            //if (1==2) {
               //$username->error = " ";
               $err_count++;
               $errors[] = "That email address is already in use!";
           }
        }


    if (!$err_count) {
        $new_user = new User();
        $new_user->of(false);
        $new_user->name = $username;
        $new_user->email = $email;
        $new_user->pass = $password;
        $new_user->addRole("guest");
        $new_user->firstname = $firstname;
        $new_user->lastname = $lastname;

        //$new_user->user_activation = $activation;
        $new_user->save();
        $new_user->of(true);
    }



    if (!$err_count) {
        $response_array['status'] = 1;

    } else {
        $response_array['status'] = 0;
        foreach ($errors as $error) {
            $error_str .= $error . ' ';
        }
        $response_array['error_str'] = $error_str;

    }
}


echo json_encode($response_array);

//echo '{"status":"1"}';

//echo $output;


function username_validation($username) {
    $valid = 1;
    //$boo = wire("users")->get($username);
    $check = wire("users")->get($username);

    if ($check->id) {
        $valid = 0;
    }

    return $valid;
}




?>








