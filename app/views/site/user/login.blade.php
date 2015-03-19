@extends('site.layouts.account')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
</div>
<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{{ Confide::makeLoginForm()->render() }}
		</div>
	</div>
</div>
@stop
