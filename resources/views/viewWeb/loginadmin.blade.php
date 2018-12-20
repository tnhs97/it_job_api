<!DOCTYPE html>
<html>

@include("viewWeb.elements.head")


<body>
    <div class='top-menu'>
        <a class="top-menu__item" href="/admin"><img class="logo-itviec" alt="itviec" src="assets/admin/logo-da892c1bca88f6b8e71f44d35b228d49bdd34134a06f90b0e78193eacad6486b.svg" width="108" height="42" />
        </a>
        <div class='top-menu__right'>
            <a class="top-menu__item top-menu__item--link" href="/admin/login">Log In</a>
        </div>
    </div>

    <div class='main-container'>
        <div class='login'>
            <h2 class='login__title text-center'>
            Hire the
            <span class='login__title--red'>best</span>
            </h2>
            <div class='panel panel-default'>
                <div class='panel-body'>
                    <form class="new_admin_user" id="new_admin_user" action="/admin/login" accept-charset="UTF-8" method="post">
                        <input name="utf8" type="hidden" value="&#x2713;" />
                        <input type="hidden" name="authenticity_token" value="XTlScciguf6oKAL4N2PG/KxA0UCgeusZfGSfF9NMwmSJ0864zl7F9oi3AzhoI5qMob/64fyHFYs4v96lr3eSIw==" />
                        <input name="redirect_to" type="hidden" id="admin_user_redirect_to" />
                        <div class='form-group'>
                            <input required="required" autofocus="autofocus" class="form-control" placeholder="Email" type="text" value="" name="admin_user[email]" id="admin_user_email" />
                        </div>
                        <div class='form-group'>
                            <input required="required" autofocus="autofocus" class="form-control" placeholder="Password" type="password" name="admin_user[password]" id="admin_user_password" />
                        </div>
                        <div class='checkbox'>
                            <label class='login__remember-me'>
                                <input name="admin_user[remember_me]" type="hidden" value="0" />
                                <input type="checkbox" value="1" name="admin_user[remember_me]" id="admin_user_remember_me" /> Remember me
                            </label>
                        </div>
                        <div class='login__actions text-center'>
                            <button class='btn btn-default login__submit' type='submit'>Log In</button>
                            <br>
                            <a class="login__forgot-password" href="/admin/password/new">Forgot your password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <footer class='page-footer'>
        <div class='page-footer__links'>
            <a class="page-footer__link" href="/">Home</a>
            <a class="page-footer__link" href="/it-jobs">All Jobs</a>
            <a target="_blank" class="page-footer__link" href="/blog/about-us/">About Us</a>
            <a target="_blank" class="page-footer__link" href="/blog/privacy-policy/">Privacy Policy</a>
            <a target="_blank" class="page-footer__link" href="/blog/terms-and-conditions/">Term &amp; Conditions</a>
        </div>
        <div class='page-footer__copyright text-center'>Copyright &copy; IT VIEC JSC</div>
        <div class='page-footer__social_icons'>
            <a target="_blank" class="social-icon social-icon--tw" href="https://twitter.com/itviec"></a>
            <a target="_blank" class="social-icon social-icon--fb" href="https://www.facebook.com/ITviec"></a>
            <a target="_blank" class="social-icon social-icon--in" href="https://www.linkedin.com/company/3093114"></a>
            <a target="_blank" rel="publisher" class="social-icon social-icon--gp" href="https://plus.google.com/105500862993414828044"></a>
        </div>
    </footer>

    <script src="assets/admin/devise-8a94c823899205b566f71b3cf858383422c1d47110391c775933f628fcc3006d.js"></script>
</body>

</html>