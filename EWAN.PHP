
<script src="javascripts/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {
                e.preventDefault();
                $("fieldset#signin_menu").toggle();
                $(".signin").toggleClass("menu-open");
            });

            $("fieldset#signin_menu").mouseup(function() {
                return false
            });
            $(document).mouseup(function(e) {
                if($(e.target).parent("a.signin").length==0) {
                    $(".signin").removeClass("menu-open");
                    $("fieldset#signin_menu").hide();
                }
            });            

        });
</script>

<divid="container">
  <divid="topnav"class="topnav"> Have an account? <ahref="login"class="signin"><span>Sign in</span></a> </div>
  <fieldsetid="signin_menu">
    <formmethod="post"id="signin"action="https://twitter.com/sessions">
      <labelfor="username">Username or email</label>
      <inputid="username"name="username"value=""title="username"tabindex="4"type="text">
      </p>
      <p>
        <labelfor="password">Password</label>
        <inputid="password"name="password"value=""title="password"tabindex="5"type="password">
      </p>
      <pclass="remember">
        <inputid="signin_submit"value="Sign in"tabindex="6"type="submit">
        <inputid="remember"name="remember_me"value="1"tabindex="7"type="checkbox">
        <labelfor="remember">Remember me</label>
      </p>
      <pclass="forgot"> <ahref="#"id="resend_password_link">Forgot your password?</a> </p>
      <pclass="forgot-username"> <Aid=forgot_username_link 
title="If you remember your password, try logging in with your email"
href="#">Forgot your username?</A> </p>
    </form>
  </fieldset>
</div>