@extends('site.layouts.customer')
{{-- Content --}}
@section('content')
     <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
    <div class="panel panel-default">
    <div class="panel-heading">
       <h3 class="panel-title">Update Profile
       </h3>
    </div>
    <div class="panel-body">
        <div class="col-md-12">
            
            <form method="POST" action="{{{ URL::to('user/'.$user->id.'/edit') }}}" accept-charset="UTF-8" class="form-horizontal ">
                <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                    <fieldset>
                        <div class="form-group ">
                            <label for="username" class="col-sm-3 control-label">Avatar</label>
                            <div class="col-sm-9">
                                <div class="col-lg-10">
                                  {{ $imageForm }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="username" class="col-sm-3 control-label">{{{ Lang::get('confide::confide.username') }}}</label>
                            <div class="col-sm-9">
                                <input class="form-control disabled" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ $user->username }}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">{{{ Lang::get('confide::confide.e_mail') }}} </label>
                            <div class="col-sm-9">
                                <input class="form-control disabled" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ $user->email }}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="col-sm-3 control-label">First Name </label>
                            <div class="col-sm-9">
                                <input class="form-control disabled" placeholder="First Name" type="text" name="first_name" id="first_name" value="{{{ $user->first_name }}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-sm-3 control-label">Last Name </label>
                            <div class="col-sm-9">
                                <input class="form-control disabled" placeholder="Last Name" type="text" name="last_name" id="last_name" value="{{{ $user->last_name }}}">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="phone_number" class="col-sm-3 control-label">Phone Number </label>
                            <div class="col-sm-9">
                                <input class="form-control disabled" placeholder="Phone Number" type="text" name="phone_number" id="phone_number" value="{{{ $user->phone_number }}}">
                            </div>
                        </div>

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
                                <button type="submit" class="btn bt-spa">Update</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

        </div>
    </div>
</div>
@stop