
<?
$fu = $modules->get('FrontendUser');
?>


<div class="container-fluid login">
    <div class="sub-container">
        <div class="row">
            <div class="col-md-12">
                <h2>Please register.</h2>
                <p>If you are a new user, please register your details to access our complete list of forms, to request a quote or to lodge a claim.</p>

                <form id="fuRegisterForm" name="fuRegisterForm" method="post" action="./" >
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input id="username" class="form-control" name="username" type="text" placeholder="Username">
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

                        <button id="fhSubmit1" class="btn btn-default" name="fhSubmit1" value="Register" type="submit">Register</button>

                        <input type="hidden" name="<?=$session->CSRF->getTokenName(); ?>" value="<?=$session->CSRF->getTokenValue(); ?>" class="_post_token" >
                </form>
            </div>
        </div>
    </div>
</div>







