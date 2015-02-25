<form method="POST" action="{{{ URL::to('user') }}}" accept-charset="UTF-8" class="form-horizontal ">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
    <fieldset>
        <div class="form-group ">
            <label for="username" class="col-sm-3 control-label">{{{ Lang::get('confide::confide.username') }}}</label>
            <div class="col-sm-9">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">{{{ Lang::get('confide::confide.e_mail') }}} </label>
            <div class="col-sm-9">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            </div>
        </div>

        @if($type == 'trailer')
            <div class="form-group">
            <label for="email" class="col-sm-3 control-label">{{{ Lang::get('confide::confide.e_mail') }}} </label>
            <div class="col-sm-9">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            </div>
        </div>
        @endif

        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">{{{ Lang::get('confide::confide.password') }}}</label>
            <div class="col-sm-9">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
            </div>
        </div>
        <div class="form-group">
            <label for="password_confirmation" class="col-sm-3 control-label">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
            <div class="col-sm-9">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
            </div>
        </div>

        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">
                @if (is_array(Session::get('error')))
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if (Session::get('notice'))
            <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
        </div>

    </fieldset>
</form>
