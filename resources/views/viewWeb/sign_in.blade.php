<!DOCTYPE html>
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>

@include("viewWeb.elements.head")

<body class='sessions_new' data-env='production'>
    <!-- Google Tag Manager -->
    <noscript>
        <iframe height='0' src='/www.googletagmanager.com/ns.html_1151319734.jpg' style='display:none;visibility:hidden' width='0'></iframe>
    </noscript>
    <div id='container'>
        <div class='pageHeader'>
            @include("viewWeb.elements.page-header")

        </div>
        <div class='hidden-xs' id='scrolltop'>
            <div class='top-arrow'></div>
        </div>
        <div class='hidden-xs hidden-sm' id='feedback'>
            <a href='https://itviec.uservoice.com/forums/207426-general/filters/new' class='uservoice_link' target='_blank'>FEEDBACK</a>
        </div>

        <div class='user-sessions'>
            <div class='main-content'>
                <div class='row'>
                    <div class='col-md-6 col-md-offset-3 col-xs-12'>
                        <div class='content'>
                            <div class='robby-image'>
                                <img src="assets/roby-jrjdyeah-f5e8849eaf88be88c054a7c6c66cf82c841d0d40aa04bfc725c574f8716d736d.png" />
                            </div>
                            <div class='message'>
                                Sign in now to access your account on ITviec.
                            </div>
                            <br>
                            <div class='sign-in-action-wrapper'>
                                <div class='sign-in-button gplus button'>
                                    <a id="gplus-signin" rel="nofollow" href="/users/auth/google_oauth2">
                                        <div class='icon gplus-icon'>
                                            <i class="fa fa-google-plus"></i>
                                        </div>
                                        <div class='sign-in-text'>
                                            Sign in with Google
                                        </div>
                                    </a>
                                </div>

                                <div class='sign-in-button facebook button'>
                                    <a id="facebook-signin" rel="nofollow" onclick="Login(this); return false;" href="">
                                        <div class='icon'>
                                            <i class="fa fa-facebook"></i>
                                        </div>
                                        <div class='sign-in-text'>
                                            Sign in with Facebook
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class='hr'>
                                <hr>
                                <span>or</span>
                            </div>

                            <form role="form" data-controller="users--sign-in" data-remote="true" action="/sign_in" accept-charset="UTF-8" method="post">
                                <input name="utf8" type="hidden" value="&#x2713;" />
                                <input type="hidden" name="authenticity_token" value="nfnmNyHWlaG/wzlhyAGNTZP3cbPPw84Sp+bSWT5ctYMzXde7y0Fh3tlXCVp3ZOziMUCL7r0wOQq8MUSxfJZi5Q==" />
                                <div class='form-group'>
                                    <div class='form-error text-left' data-target='users--sign-in.error'></div>
                                </div>
                                <div class='form-group'>
                                    <input class="form-control" placeholder="Email" required="required" data-rule-email="true" data-msg-email="Please correct the email address" data-msg="Please add email" type="email" value="" name="user[email]" />
                                </div>
                                <div class='form-group'>
                                    <input class="form-control" placeholder="Password" required="required" data-rule-minlength="8" data-msg-minlength="Password must be at least 8 characters" data-msg="Please add password" type="password" name="user[password]" />
                                </div>
                                <div class='form-group'>
                                    <a class="right forgot-password" rel="nofollow" href="/users/password/new">Forgot password?</a>
                                </div>
                                <br>
                                <div class='form-group text-center'>
                                    <input type="hidden" name="sign_in_then_review" value="false" />
                                    <input type="submit" name="commit" value="Sign in" class="button-red space ibutton x-large" data-disable-with="Sign in" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='clearfix'></div>
        <div id='logo'>
            <div class='logo-image'></div>
        </div>
        <div class='clearfix'></div>
    </div>
    @include("viewWeb.elements.modal-fade")

    <div id='footer'>
        <div class='content'>
            @include("viewWeb.elements.bottom")
        </div>
    </div>

    @include("viewWeb.elements.script")
</body>

</html>
