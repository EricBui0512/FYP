@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')

    {{-- Delete Country Form --}}
    <form id="deleteForm" class="form-horizontal" method="post" action="@if (isset($retailer)){{ URL::to('admin/retailers/' . $retailer->id . '/delete') }}@endif" autocomplete="off">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="id" value="{{ $retailer->id }}" />
        <!-- ./ csrf token -->

        <!-- Form Actions -->
        <div class="text-center form-group">
            <div class="controls">
                <element class="btn-cancel close_popup">Cancel</element>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
        <!-- ./ form actions -->
    </form>
@stop