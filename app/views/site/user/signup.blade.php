@extends('site.layouts.account')
{{-- Content --}}
@section('content')
     <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
        <div class="container">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="intro">Sign Up</h1>
                <div id="locationField"></div> 
                <div class="text-l formsignup box" >
                    <h3 class="text-center">Let's get started!</h3>
                    <h4 class="text-center">First, tell us what you're looking for.</h4>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1 margin-t20 ">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="{{asset('assets/img/customer.png')}}">
                                </div>
                                <div class="col-sm-7">
                                    <h4>Register as customer</h4>
                                    <a href="{{{ URL::to('user/create/customer') }}}" class="btn btn-lg btn-info">Signup</a>
                                </div>
                            </div>
                            
                         
                        </div>
                        <div class="col-md-4 margin-t20">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="{{asset('assets/img/trailer.png')}}">
                                </div>
                                <div class="col-sm-7">
                                    <h4>Register as Retailer</h4>
                                    <a href="{{{ URL::to('user/create/trailer') }}}" class="btn btn-lg btn-danger">Signup</a>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-1"></div> 
        </div>
        <script type="text/javascript">
            $('body').addClass("signup-body");
        </script>
@stop
       