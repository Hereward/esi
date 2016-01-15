<div id="loginModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Please Login to Continue</h4>
            </div>
            <div class="modal-body">

                <form id="fuLoginForm"  name="fuLoginForm" method="post" action="./">
                    <div class="form-group">
                        <label for="username">Email Address</label>
                        <input id="username" class="form-control" name="username" type="text" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password" placeholder="Password">
                    </div>
                    <button id="fhSubmit1" class="btn btn-primary" name="fhSubmit1" value="Login" type="submit">Login</button> &nbsp; Don't have an account yet? <strong><a href="/member-area/register/">Register here</a></strong>
                    <input type="hidden" name="<?=$session->CSRF->getTokenName(); ?>" value="<?=$session->CSRF->getTokenValue(); ?>" class="_post_token" >
                </form>

            </div>

            <div class = "modal_message_area">
                <div id="messages"></div>
                <button id="continue_button" type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal">Continue</button>
            </div>


            <div id="modal_footer" class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
                            $('#fuLoginForm').hide();
                            $('#modal_footer').hide();
                            $('.modal-header').hide();
                            $('#messages').addClass('alert alert-success').text("You are now logged in!");
                            $('.modal_message_area').show();
                            $('#continue_button').show();
                            $('#loginModal').on('hidden.bs.modal', function () {
                                location.reload();
                            })
                            //$('#messages').addClass('alert alert-success').text(response.message);
                        } else if (response.status == '-1') {
                            $('#messages').addClass('alert alert-danger').text("COMMUNICATION BREAKDOWN!");
                        } else {
                            $('#messages').addClass('alert alert-danger').text("LOGIN FAILED!");
                            //$('#messages').addClass('alert alert-danger').text(response.message);
                            $('#continue_button').hide();

                        }
                        $('.modal_message_area').show();
                    }
                });
                e.preventDefault();
            });

            $('#loginModal').on('hidden.bs.modal', function () {
                //location.reload();
                window.location = '/';
            })

        });
    </script>
<? } ?>









