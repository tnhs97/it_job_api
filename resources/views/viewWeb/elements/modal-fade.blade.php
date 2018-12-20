<div class='modal fade' id='sign-in-modal' role='dialog' tabindex='-1'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-body text-center'>
                    <button class='modal-body__close' data-dismiss='modal' type='button'>
                        <span>×</span>
                    </button>
                    <ul class='login nav nav-tabs' role='tablist'>
                        <li class='active tab-signup' role='presentation'>
                            <a aria-expanded='true' data-toggle='tab' href='#signup-tab' role='tab'>Create Account</a>
                        </li>
                        <li class='tab-signin' role='presentation'>
                            <a aria-expanded='false' data-toggle='tab' href='#signin-tab' role='tab'>Sign In</a>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <div aria-labelledby='signup-tab' class='active fade in tab-pane' id='signup-tab' role='tabpanel'>
                            <div class='signup-tab-content'>
                                <p class='message'>
                                    Sign up to apply faster
                                    <div class='social-errors'></div>
                                </p>
                                <div class='sign-in-action-wrapper'>
                                    <div class='sign-in-button gplus button'>
                                        <a id="gplus-signin" rel="nofollow" href="/users/auth/google_oauth2">
                                            <div class='icon gplus-icon'>
                                                <i class="fa fa-google-plus"></i>
                                            </div>
                                            <div class='sign-in-text'>
                                                Sign up with Google
                                            </div>
                                        </a>
                                    </div>

                                    <div class='sign-in-button facebook button'>
                                        <a id="facebook-signin" rel="nofollow" onclick="Login(this); return false;" href="">
                                            <div class='icon'>
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                            <div class='sign-in-text'>
                                                Sign up with Facebook
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class='hr'>
                                    <hr>
                                    <span>or</span>
                                </div>

                                <form class="new_user" id="signup_form" role="form" data-remote="true" data-controller="users--sign-up" action="/users" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="&#x2713;" />
                                    <input type="hidden" name="authenticity_token" value="JpG9dzpZjEVQEr7cfu+1+M5EYJjp3Y/fZrpkVOLQT2vfPoYqNWo68zSgPTZk70CBQsKUBE8sxhW60Ji7OJ3ukQ==" />
                                    <div class='form-group'>
                                        <div class='form-error text-left' data-target='users--sign-up.error'></div>
                                    </div>
                                    <div class='form-group'>
                                        <input maxlength="50" autofocus="autofocus" class="form-control" placeholder="Name" size="50" type="text" name="user[name]" id="user_name" />
                                    </div>
                                    <div class='form-group'>
                                        <input class="form-control" placeholder="Email" required="required" data-rule-email="true" data-msg-email="Please correct the email address" data-msg="Please add email" data-rule-noplus="true" data-msg-noplus="Please correct the email address" type="email" value="" name="user[email]" id="user_email" />
                                    </div>
                                    <div class='form-group'>
                                        <input class="form-control" placeholder="Password" required="required" data-rule-minlength="8" data-msg-minlength="Password must be at least 8 characters" data-msg="Please add password" type="password" name="user[password]" id="user_password" />
                                    </div>
                                    <input type="submit" name="commit" value="Create My Account" rel="nofollow" class="x-large ibutton ibutton-red ibutton-create-account" data-disable-with="Create My Account" />
                                </form>
                            </div>
                        </div>
                        <div aria-labelledby='signin-tab' class='fade tab-pane' id='signin-tab' role='tabpanel'>
                            <p class='message'>
                                Sign in to unlock everything on ITviec
                                <div class='social-errors'></div>
                            </p>
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
                                <input type="hidden" name="authenticity_token" value="/yaFrXLmHxCYfvqVNgfvBKSBdPZK72iwBHinVPpkAYwp4YPsywU7nwAyGLDkwWfafCo09t45FFE+vodWiON9tw==" />
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
                    <div class='response-confirmation'>
                        <div class='message'>
                            <p>Cool, you&#39;re almost done!</p>
                            <p>Go to your inbox now to confirm your email address before signing in.</p>
                        </div>
                        <button class='button-red sign-in-btn'>Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
