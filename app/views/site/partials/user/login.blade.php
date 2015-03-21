<form class="" method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">                           
            <h4><i class="icon-user"></i>&nbsp;&nbsp; Login Here</h4>
            @if ( Session::get('error') )
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif

            @if ( Session::get('notice') )
                <div class="alert">{{ Session::get('notice') }}</div>
            @endif
            <label>Username</label>
            <input type="text" class="form-control" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" name="email" id="email" value="{{ Input::old('email') }}">
            <label>Password</label><a href="/user/forgot" class="pull-right"><i class="icon-question-sign"></i>&nbsp;Forgot Password</a> 
            <input type="password" class="form-control" tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" name="password" id="password">
                <div class="checkbox">
                    <label for="remember">{{ Lang::get('confide::confide.login.remember') }}
                        <input type="hidden" name="remember" value="0">
                        <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                    </label>
                </div>
            <br>
            <button tabindex="3" class="btn btn-default " type="submit">Sign In&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></button>
            <a href="/user/signup" tabindex="3" class="btn btn-default " >Sign Up&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>
        <!-- <div class="span3">
            <h4><i class="icon-expand-alt"></i>&nbsp;&nbsp;Social</h4>
            <div class="socials clearfix">
                <a class="icon-facebook facebook"></a>
                <a class="icon-twitter twitter"></a>
                <a class="icon-google-plus google-plus"></a>
                <a class="icon-pinterest pinterest"></a>
                <a class="icon-linkedin linked-in"></a>
                <a class="icon-github github"></a>
            </div>
        </div> -->
      <!--   <div class="span4">
            <h4><i class="icon-question"></i>&nbsp;&nbsp;Registration</h4>
            <div class="box">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in.
                </p>
            </div>
            <div class="box">
                Don't Have An Account.<br>
                Click Here For <a href="#" data-toggle="tab">Free Register</a>
            </div>
        </div> -->
</form>
