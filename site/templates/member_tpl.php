<div id="loginModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div style="background-size:cover; background-image:url(<?=$my_assets?>/images/general/pink_gradient.png)" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="member_action_title" class="modal-title">Please Log in</h4>
            </div>
            <div class="modal-body">

                <div class="instructions"></div>

                <form id="fuLoginForm"  name="fuLoginForm" method="post" action="./">
                    <div class="form-group">
                        <label for="username">Email Address</label>
                        <input id="username" class="form-control" name="username" type="text" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password" placeholder="Password">
                    </div>
                    <button id="fhSubmit1" class="btn btn-default" name="fhSubmit1" value="Login" type="submit">Login</button>
                    <button style="float:right;" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="<?=$session->CSRF->getTokenName(); ?>" value="<?=$session->CSRF->getTokenValue(); ?>" class="_post_token" >
                </form>

                <form id="register_form" name="register_form" method="post" action="./" >
                    <!--
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input id="username" class="form-control" name="username" type="text" placeholder="Username">
                    </div>
                    -->

                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input id="firstname" class="form-control" name="firstname" type="text">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input id="lastname" class="form-control" name="lastname" type="text">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="form-control" type="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input id="_password" class="form-control" name="_password" type="password" placeholder="enter password again">
                    </div>

                    <button id="submit" class="btn btn-default" name="submit" value="Register" type="submit">Register</button>
                    <button style="float:right;" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                    <input type="hidden" name="<?=$session->CSRF->getTokenName(); ?>" value="<?=$session->CSRF->getTokenValue(); ?>" class="_post_token" >
                    <input id="username"  name="username" type="hidden" value="">
                </form>

            </div>

            <div class = "modal_message_area">
                <div id="messages"></div>
                <button id="continue_button" type="button" class="btn btn-success btn-lg" data-dismiss="modal">Continue</button>
            </div>


            <div class="modal-footer">
                <div id="footer_message" class="fm1">Don't have an account yet? <strong><a class="form_toggle" href="/member-area/register/">&nbsp;Register here &#8594;</a></strong></div>
                <div id="footer_message" class="fm2"><a class='form_toggle' href='#'>&#8592; Go back to log in screen</a></div>
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                <!-- <button type="button" class="btn btn-primary">Submit</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="container-fluid">
    <div class="featurettes">
        <div class="row featurette grey">
            <div class="sub-container clearfix">
                <div class="col-xs-12 col-sm-6">
                    <div class="featurette_centerer">
                        <div class="featurette_centered">
                            <h2 class="featurette-heading featurette-heading-big"><?=$page->headline?></h2>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6">
                    <img class="img-responsive" src="<?=$page->tile_image->url?>" alt="product image">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="featurettes">
        <div class="row featurette member_area">
            <div class="sub-container">

                <div class="col-xs-12">
                    <h2 class="featurette-heading featurette-heading-big">Forms</h2>
                </div>

                <div class="form_grid_container clearfix">
                    <div class="col-sm-3">
                        <div class="form_grid"><img class="img-responsive" src="<?=$my_assets?>/images/icons/pf_icon.png" alt="<?=$page->proposal_form_pdf->description?>"></div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form_grid"><div class="form_grid_item"><?=$page->proposal_form_pdf->description?></div></div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form_grid"><div class="form_grid_item"><img class="img-responsive" src="<?=$my_assets?>/images/icons/download_icon.png" alt="download"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<? if (!$logged_in) { ?>
    <script>
        $(function() {

            var formState = true;
            $('#loginModal').modal();


            $('#fuLoginForm').submit(function(e) {

                var form = $(this);
                var formdata = false;
                if(window.FormData){
                    formdata = new FormData(form[0]);
                }

                var formAction = form.attr('action');

                $.ajax({
                    type        : 'POST',
                    url         : '/member-area/login_try_ajax/',
                    cache       : false,
                    data        : formdata ? formdata : form.serialize(),
                    contentType : false,
                    processData : false,
                    dataType: 'json',

                    success: function(response) {
                        //TARGET THE MESSAGES DIV IN THE MODAL
                        if(response.status == '1') {
                            form_submit_success('login');
                            //$('#messages').addClass('alert alert-success').text(response.message);
                        } else if (response.status == '-1') {
                            $('#messages').addClass('alert alert-danger').text("COMMUNICATION BREAKDOWN!");
                        } else {
                            $('#messages').addClass('alert alert-danger').text("Sorry, you entered the wrong username or password.");
                            //$('#messages').addClass('alert alert-danger').text(response.message);
                            $('#continue_button').hide();

                        }
                        $('.modal_message_area').show();
                    }
                });
                e.preventDefault();
            });

            $('#register_form').submit(function(e) {

                var form = $(this);
                var formdata = false;
                if(window.FormData){
                    formdata = new FormData(form[0]);
                }

                var formAction = form.attr('action');

                $.ajax({
                    type        : 'POST',
                    url         : '/member-area/register_try_ajax/',
                    cache       : false,
                    data        : formdata ? formdata : form.serialize(),
                    contentType : false,
                    processData : false,
                    dataType: 'json',

                    success: function(response) {
                        //TARGET THE MESSAGES DIV IN THE MODAL
                        if(response.status == '1') {
                            form_submit_success('register');
                            //$('#messages').addClass('alert alert-success').text(response.message);
                        } else if (response.status == '-1') {
                            $('#messages').addClass('alert alert-danger').text("COMMUNICATION BREAKDOWN!");
                        } else {
                            $('#messages').addClass('alert alert-danger').text("Sorry, there was a problem. "+response.error_str);
                            //$('#messages').addClass('alert alert-danger').text(response.message);
                            $('#continue_button').hide();

                        }
                        $('.modal_message_area').show();
                    }
                });
                e.preventDefault();
            });



/*

            $('#register_form').submit(function(e) {

                var form = $(this);
                var formdata = false;
                if(window.FormData){
                    formdata = new FormData(form[0]);
                }

                var formAction = form.attr('action');

                $.ajax({
                    type        : 'POST',
                    url         : '/member-area/register_try_ajax/',
                    cache       : false,
                    data        : formdata ? formdata : form.serialize(),
                    contentType : false,
                    processData : false,
                    dataType: 'json',

                    success: function(response) {
                        //TARGET THE MESSAGES DIV IN THE MODAL
                        if(response.status == '1') {
                            form_submit_success('register');
                            //$('#messages').addClass('alert alert-success').text(response.message);
                        } else if (response.status == '-1') {
                            $('#messages').addClass('alert alert-danger').text("COMMUNICATION BREAKDOWN!");
                        } else {
                            //$('#messages').empty();
                            $('#messages').addClass('alert alert-danger').text("Sorry, your registration did not succeed. ");
                            //$('#messages').addClass('alert alert-danger').text(response.message);
                            $('#continue_button').hide();

                        }
                        $('.modal_message_area').show();
                    }
                });
                e.preventDefault();
            });
            */


            $('#loginModal').on('hidden.bs.modal', function () {
                //location.reload();
                window.location = '/';
            })

            $( "#loginModal .form_toggle").click(function(e) {
                e.preventDefault();
                formState = !formState;
                showform(formState);
            });

            showform(1);


        });

        function form_submit_success(type) {
            if (type == 'login') {
                $('#fuLoginForm').hide();
                $('.modal-footer').hide();
                $('.modal-header').hide();
                $('#messages').empty();
                $('#messages').addClass('alert alert-success').text("You are now logged in!");
                $('.modal_message_area').show();
                $('#continue_button').show();
                $('#loginModal').on('hidden.bs.modal', function () {
                    location.reload();
                })

                $('#loginModal .instructions').hide();

            } else if (type == 'register') {

                $('#register_form').hide();
                $('.modal-footer').hide();
                $('.modal-header').hide();
                $('#messages').empty();
                $('#messages').addClass('alert alert-success').text("You have successfully registered!");
                $('.modal_message_area').show();
                $('#continue_button').show();
                $('#loginModal').on('hidden.bs.modal', function () {
                    location.reload();
                })

                $('#loginModal .instructions').hide();

            }

        }

        function showform(formState) {
            if (formState) {
                $('#fuLoginForm').show();
                $('#register_form').hide();
                $('#footer_message.fm1').show();
                $('#footer_message.fm2').hide();
                $('#member_action_title').text("Please Log in");
                $('#loginModal .instructions').text(" Sign in to access our complete list of forms, to request a quote or to lodge a claim.");
                $('#messages').empty();

            } else {

                $('#register_form').show();
                $('#fuLoginForm').hide();
                $('#footer_message.fm2').show();
                $('#footer_message.fm1').hide();
                $('#member_action_title').text("Please register");
                $('#loginModal .instructions').text("If you are a new user, please register your details to access our complete list of forms, to request a quote or to lodge a claim.");
                $('#messages').empty();
            }

        }
    </script>
<? } ?>









