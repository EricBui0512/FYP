@extends('site.layouts.account')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.forgot_password') }}} ::
@parent
@stop
{{-- Content --}}
@section('content')
<div class="page-header">
	
</div>
<div class="container">
	<br/>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>{{{ Lang::get('user/user.forgot_password') }}}</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{{ Confide::makeForgotPasswordForm() }}
		</div>
	</div>
</div>
@stop