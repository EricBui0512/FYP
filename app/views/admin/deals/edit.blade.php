@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')

	{{-- Create address Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($address)){{ URL::to('admin/addresses/' . $address->id . '/edit') }} @else {{ URL::to('admin/addresses/create') }} @endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->
		
		<!-- ./ tabs -->
		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- deal tab -->
			<div class="tab-pane active" id="tab-create">
				<!-- title -->
				<div class="form-group {{{ $errors->has('title') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="title">Title</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="title" id="title" value="{{{ Input::old('title', isset($deal) ? $deal->title : null) }}}" />
						{{ $errors->first('title', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ title -->

				<!-- service -->
				<div class="form-group {{{ $errors->has('service_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="service_id">Service</label>
					<div class="col-md-10">
                    	{{ Form::select('service_id', $services, isset($deal) ? $deal->service_id : 0, array('class' => 'form-control m-b') ) }}
						{{ $errors->first('service_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ service -->

				<!-- amount -->
				<div class="form-group {{{ $errors->has('amount') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="amount">Amount</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="amount" id="amount" value="{{{ Input::old('amount', isset($deal) ? $deal->amount : null) }}}" />
						{{ $errors->first('amount', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ amount -->

				<!-- discount -->
				<div class="form-group {{{ $errors->has('discount') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="discount">Discount</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="discount" id="discount" value="{{{ Input::old('discount', isset($deal) ? $deal->discount : null) }}}" />
						{{ $errors->first('discount', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ discount -->
					
				<!-- special request -->
				<div class="form-group {{{ $errors->has('special_request') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="district">Special Request</label>
					<div class="col-md-10">
						<textarea placeholder="Special Request" class="form-control" rows="5" name="special_request">
                     		{{ isset($deal) ? $deal->special_request : null }}
                     	</textarea>
						{{ $errors->first('special_request', '<span class="help-inline">:message</span>') }}</div>
				</div>
				<!-- ./ special request -->
					
				<!-- time slot -->
				<div class="form-group {{{ $errors->has('time_slot') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="time_slot">Time Slod</label>
					<div class="col-md-10">
						<input class="form-control" type="date" name="time_slot" id="time_slot" value="{{{ Input::old('time_slot', isset($deal) ? $deal->time_slot : null) }}}" />
						{{ $errors->first('time_slot', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ time slot -->
				
				<!-- remind time -->
				<div class="form-group {{{ $errors->has('remind_time') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="remind_time">Remind Time</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="remind_time" id="remind_time" value="{{{ Input::old('remind_time', isset($deal) ? $deal->remind_time : null) }}}" />
						{{ $errors->first('remind_time', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ remind time -->

			</div>
			<!-- ./ deal tab -->
					
			</div>
			<!-- ./ condition tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">OK</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
{{-- Scripts --}}
@section('scripts')
<script src="{{asset('assets/js/admin/address-list.js')}}"></script>
@stop