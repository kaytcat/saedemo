
@if($msg = Session::get('error'))
	<div class="alert alert-danger">
		{!! $msg !!}
	</div>
@endif

@if($msg = Session::get('warning'))
	<div class="alert alert-warning">
		{!! $msg !!}
	</div>
@endif

@if($msg = Session::get('info'))
    <div class="alert alert-info">
        {!! $msg !!}
    </div>
@endif

@if($msg = Session::get('success'))
	<div class="alert alert-success">
		{!! $msg !!}
	</div>
@endif

@if(isset($errors) && is_object($errors) && $errors->any())
	@if($errors->count() > 1)
		<div class="alert alert-block alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{!! $error !!}</li>
				@endforeach	
			</ul>
		</div>
	@else
		<div class="alert alert-danger">
			{!! $errors->first() !!}
		</div>
	@endif
@endif
