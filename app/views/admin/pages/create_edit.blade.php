@extends('admin.layouts.default')

{{-- Content --}}
@section('content')
	<fieldset>
		<legend>Create a page</legend>
		{{-- Create page Form --}}
		<form class="form-horizontal" method="post" action="@if (isset($page)){{ URL::to('admin/pages/' . $page->id ) }} @else {{ URL::to('admin/pages/create') }} @endif" autocomplete="off">
			<!-- CSRF Token -->
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<!-- ./ csrf token -->

			<!-- Tabs Content -->
			<div class="tab-content">
				<!-- General tab -->
				<div class="tab-pane active" id="tab-general">
					<!-- page -->
					<div class="form-group {{{ $errors->has('page') ? 'error' : '' }}}">
						<label class="col-md-2 control-label" for="slug">Page</label>
						<div class="col-md-10">
							{{ Form::select('slug', $slugs, (isset($page)? $page->slug:'') )}}
							{{ $errors->first('slug', '<span class="help-inline">:message</span>') }}
						</div>
					</div>
					<!-- ./ page -->

					<!-- content -->
					<div class="form-group {{{ $errors->has('content') ? 'error' : '' }}}">
						<label class="col-md-2 control-label" for="content">Content</label>
						<div class="col-md-10">
							<textarea name="content" class="ckeditor">

							{{ Input::old('content',isset($page->content) ?$page->content:'')}}
							</textarea>
							{{ $errors->first('content', '<span class="help-inline">:message</span>') }}
						</div>
					</div>
					<!-- ./ page -->

				</div>
				<!-- ./ general tab -->

			</div>
			<!-- ./ tabs content -->

			<!-- Form Actions -->
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<a  href="{{{URL::to('admin/pages')}}}" class="btn btn-default">Cancel</a>
					<button type="submit" class="btn btn-success">{{ isset($page)?'Update' : 'Create'}}</button>
				</div>
			</div>
			<!-- ./ form actions -->
		</form>
	</fieldset>
@stop
