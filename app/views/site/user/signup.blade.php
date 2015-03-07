@extends('site.layouts.account')
{{-- Content --}}
@section('content')
     <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="intro"></h1>
                <div id="locationField"></div> 
                <div class="text-l formsignup box" >
                    <h3>Let's get started!</h3>
                    <h6>First, tell us what you're looking for.</h6>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/customer.png')}}">
                        Create Customer
                        <div>
                            <a href="{{{ URL::to('user/create/customer') }}}" class="btn bt-spa">Signup</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/trailer.png')}}">
                        Create Retailer
                        <div>
                            <a href="{{{ URL::to('user/create/retailer') }}}" class="btn bt-spa">Signup</a>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>
@stop
       