@extends('site.layouts.account')
{{-- Content --}}
@section('content')
     <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
        <div class="container content">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="locationField"></div> 
                <div class="box" >
                @if($type=='trailer') 
                <h3 class="margin-b20 text-center ttu">Create a Free Retailer Account</h3>
                @else
                <h3 class="margin-b20 text-center ttu">Create a Free Customer Account</h3>
                @endif
                <div class="break-line margin-b20"></div>
                <form method="POST" action="{{{ URL::to('user') }}}" accept-charset="UTF-8" class="form-horizontal ">
                    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                    <input type="hidden" name="type" value="{{{ $type }}}">
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
                                    <label for="Spa" class="col-sm-3 control-label">Your company name </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" placeholder="Your company name" type="text" name="spaname" id="spaname" value="{{{ Input::old('spaname') }}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Spa" class="col-sm-3 control-label">Business Category</label>
                                    <div class="col-sm-9">
                                        {{Form::select('category',BusinessCategory::getKeyValueData(),Country::DEFAULT_COUNTRY,array('class'=>'form-control'))}}
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
                            <div class="form-group text-l">
                                <div  class="col-sm-3 control-label"></div>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn bt-spa">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>
        <script type="text/javascript">
            $('body').addClass("signup-body");
        </script>

@stop