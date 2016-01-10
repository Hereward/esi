<div class="container-fluid login">
    <div class="sub-container">
        <div class="row">
            <div class="col-md-12 member_form">
                <h2>Please log in.</h2>
                <p>Sign in to access our complete list of forms, to request a quote or to lodge a claim.</p>

<!--
                <form id="fuLoginForm" class=" InputfieldForm" name="fuLoginForm" method="post" action="./" data-colspacing="1">

                    <ul class="Inputfields">

                        <li class="Inputfield InputfieldText Inputfield_username ui-widget InputfieldStateRequired" id="wrap_username">

                            <div class="InputfieldContent ui-widget-content">

                                <input id="username" class=" required InputfieldMaxWidth" name="username" type="text" maxlength="2048" placeholder="Username">
                            </div>
                        </li>
                        <li class="Inputfield InputfieldText Inputfield_password ui-widget InputfieldStateRequired" id="wrap_password">

                            <div class="InputfieldContent ui-widget-content">

                                <input id="password" class=" required InputfieldMaxWidth" name="password" type="password" maxlength="2048" placeholder="Password">
                            </div>
                        </li>
                        <li class="Inputfield InputfieldSubmit Inputfield_fhSubmit1 ui-widget" id="wrap_fhSubmit1">

                            <div class="InputfieldContent ui-widget-content">

                                <button id="fhSubmit1" class="ui-button ui-widget ui-state-default ui-corner-all" name="fhSubmit1" value="Login" type="submit"><span class="ui-button-text">Login</span></button>
                            </div>
                        </li>
                    </ul>

                </form>
                -->


                <form id="fuLoginForm"  name="fuLoginForm" method="post" action="./">
                    <div class="form-group">
                        <label for="username">Email Address</label>
                        <input id="username" class="form-control" name="username" type="text" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password" placeholder="Password">
                    </div>
                    <button id="fhSubmit1" class="btn btn-default" name="fhSubmit1" value="Login" type="submit">Login</button> &nbsp; Don't have an account yet? <strong><a href="/member-area/register/">Register here</a></strong>
                    <input type="hidden" name="<?=$session->CSRF->getTokenName(); ?>" value="<?=$session->CSRF->getTokenValue(); ?>" class="_post_token" >
                </form>



            </div>

        </div>
    </div>
</div>





