@extends('site.layouts.account')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.book') }}} ::
@parent
@stop
{{-- Content --}}
@section('content')
<div class="page-header">
</div>
<div class="container">
	<div class="row mt60">
		<div class="col-md-6">
			<h3 class="cf4">Booking info</h3>
			<p classs"cfMain" style="font-size:20px;line-height:40px;"><strong>Spa: </strong>{{$response['retailerName']}}</p>
			<p classs"cfMain" style="font-size:20px;line-height:40px; color:red;"><strong>Price: </strong>{{$response['price']}} SGD</p>

			<p style="font-size:15px;line-height:30px;"><strong>Spa Location: </strong>{{$response['outletName']}}</p>
			<p style="font-size:15px;line-height:30px;"><strong>Service: </strong>{{$response['serviceName']}}</p>

			<p style="font-size:15px;line-height:30px;"><strong>On Date: </strong>{{date('l jS \of F Y h:i A',$response['apptDateTime'])}}</p>
		</div>
		<div class="col-md-6">
			@if (!Auth::check())
			<h3 class="mb20 cfMain">Whoops, please login to book this service</h3>
			{{ Confide::makeLoginForm()->render() }}
			@else
			<h3 class="mb20 cfMain">Do you want to book this service?</h3>
			{{Form::open(array('url'=>'payment'))}}
			<div class="form-group">
						<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
	                		<input type="hidden" name="total" value="{{ $Bill->total }}">
	                		<input type="hidden" name="qty" value="{{ $Bill->qty }}">
	                		<input type="hidden" name="price" value="{{ $Bill->amount }}">
	                		<input type="hidden" name="bill_id" value="{{ $Bill->id }}">
	                		<input type="hidden" name="service_name" value="{{$response['serviceName']}}">
				<div>
					<button type="submit" class="btn btn-primary">Pay Now</button>
					<a href="/" class="btn btn-default"><i class="fa fa-home"></i>Return Home Page</a>
				</div>
			</div>
		</div>
		{{Form::close()}}
		@endif
	</div>
	
</div>
</div>
@stop