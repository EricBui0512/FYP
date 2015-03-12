@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')

	{{-- Create address Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($address)){{ URL::to('admin/addresses/' . $address->id . '/edit') }} @else {{ URL::to('admin/addresses/create') }} @endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->
		<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-create" data-toggle="tab">Service</a></li>
			<li><a href="#tab-detail" data-toggle="tab">Detail</a></li>
			<li><a href="#tab-condition" data-toggle="tab">Service Condition</a></li>
		</ul>
		<!-- ./ tabs -->
		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- Service tab -->
			<div class="tab-pane active" id="tab-create">
				<!-- country -->
				<div class="form-group {{{ $errors->has('name') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="name">Name</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="name" id="name" value="{{{ Input::old('name', isset($service) ? $service->name : null) }}}" />
						{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ country -->

				<!-- city -->
				<div class="form-group {{{ $errors->has('price') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="price">Price</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="price" id="price" value="{{{ Input::old('price', isset($service) ? $service->price : null) }}}" />
						{{ $errors->first('price', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ city -->
					
				<!-- Distric -->
				<div class="form-group {{{ $errors->has('outlet_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="district">Outlet Name</label>
					<div class="col-md-10">
						{{ Form::Select( 'outlet_id', $outlets, (isset($service->outlet_id))?$service->outlet_id:0, array('class' => 'form-control m-b'))}}
						{{ $errors->first('outlet_id', '<span class="help-inline">:message</span>') }}</div>
				</div>
				<!-- ./ Distric -->
					
				<!-- Images -->
				<div class="form-group">
		            {{ Form::label('image', 'Image',array('class'=>'col-lg-2 control-label')) }}
		            <div class="col-lg-10">
		              {{ $imageForm }}
		            </div>
	          	</div>
				<!-- ./ Images -->

			</div>
			<!-- ./ Service tab -->

			<!-- Detail tab -->
			<div class="tab-pane" id="tab-detail">
				<!-- summary -->
				<div class="form-group {{{ $errors->has('summary') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="summary">Summary</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="summary" cols="75" rows="5">
							{{ Input::old('summary',isset($service->detail->summary) ? $service->detail->summary:'')}}
						</textarea>
						{{ $errors->first('summary', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ summary -->

				<!-- highlights -->
				<div class="form-group {{{ $errors->has('highlights') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="highlights">Highlights</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="highlights" cols="75" rows="5">
							{{ Input::old('highlights',isset($service->detail->highlights) ? $service->detail->highlights:'')}}
						</textarea>
						{{ $errors->first('highlights', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ highlights -->
					
			</div>
			<!-- ./ detail tab -->

			<!-- condition tab -->
			<div class="tab-pane" id="tab-condition">
				<!-- special_condition -->
				<div class="form-group {{{ $errors->has('special_condition') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="special_condition">Special Condition</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="special_condition" cols="75" rows="5">
							{{ Input::old('special_condition',isset($service->detail->special_condition) ? $service->detail->special_condition:'')}}
						</textarea>
						{{ $errors->first('special_condition', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ special_condition -->

				<!-- condition1 -->
				<div class="form-group {{{ $errors->has('condition1') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="condition1">Condition1</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="condition1" cols="75" rows="5">
							{{ Input::old('condition1',isset($service->detail->condition1) ? $service->detail->condition1:'')}}
						</textarea>
						{{ $errors->first('condition1', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ condition1 -->

				<!-- condition2 -->
				<div class="form-group {{{ $errors->has('condition2') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="condition2">Condition2</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="condition2" cols="75" rows="5">
							{{ Input::old('condition2',isset($service->detail->condition2) ? $service->detail->condition2:'')}}
						</textarea>
						{{ $errors->first('condition2', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ condition2 -->
					
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