
<div class="col-lg-12">
	<input multiple class="image" type="file" name="images" data-url="{{URL::to('outlet/uploadimage' )}}" >            
	<input type="hidden" value="{{{ $refId }}}" name='ref_id'>
	<input type="hidden" value="{{ $type }}" name='type'>
	<div id="progress">
		<div class="bar" style="width: 0%;"></div>
		<div >
		<p class="ulimage">0%</p>
		</div>
	  	{{ $errors->first('image',  '<div class="alert alert-danger">:message</div>') }}
   	</div>
</div>
<br/>
@if( ! empty($images))
	<div class="list-images">
		@foreach( $images as $image )
			<div class="col-lg-2 ele-{{ $image->id }}">
				<div id="progress">
					<image id="picture" alt="" src="/{{{ $image->thumbnail_path }}}" height="64" width="64"/>
			   	</div>
			   	<a href="javascript:void(0)" id="{{$image->id}}" class="col-lg-1 del-img icon-add"><em class="fa fa-minus"></em></a>
			</div>
		@endforeach
	</div>
@endif