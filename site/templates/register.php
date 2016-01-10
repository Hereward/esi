<?

$inc_contact_info = false;

$content_path = "./register_tpl.php";
$fu = $modules->get('FrontendUser');

$FirstName = $modules->get('InputfieldText');
$FirstName->label = $this->_('First Name');
$FirstName->attr('id+name', 'firstname');
//$FirstName->required = 1;
$FirstName->fhSanitizer = 'text';

// Call hook after field is processed by PW form api
$FirstName->addHookAfter('processInput',
    function($event) {
        $field = $event->object;
        $mySanitizedCustomInput = wire('fu')->form->fhValue($field->name);
        //die("mySanitizedCustomInput =[$mySanitizedCustomInput]");
        wire('fu')->userObj->firstname = $mySanitizedCustomInput;

        $input = $event->arguments(0);


        $email = wire('sanitizer')->email($input['email']);
        wire('fu')->userObj->username = $email;

        // Need to set an field error?
        // $field->error('Custom field has an error...');
    });



$LastName = $modules->get('InputfieldText');
$LastName->label = $this->_('Last Name');
$LastName->attr('id+name', 'lastname');
//$LastName->required = 1;
$LastName->fhSanitizer = 'text';

// Call hook after field is processed by PW form api
$LastName->addHookAfter('processInput',
    function($event) {
        $field = $event->object;
        $mySanitizedCustomInput = wire('fu')->form->fhValue($field->name);
        wire('fu')->userObj->lastname = $mySanitizedCustomInput;
        $input = $event->arguments(0);
    });



$fu->register(array('username', 'email', 'password', $FirstName, $LastName));
$fu->process("/member-area/login/");
?>








