@if(count($errors)>0)
	
				@foreach($errors->all() as $error)
				<div class="alert alert-danger" style="text-align: center;">{{$error}}</div>
                <div class="clear-both"></div>
				@endforeach

				<!-- //this one is for validation error -->
		
@endif

@if(Session::has('myerror'))
	
<div class="alert alert-danger" style="text-align: center;">{{ Session::get('myerror') }}</div>
                <div class="clear-both"></div>
		{{Session::forget('myerror')}} <!-- this will destroy the session. -->
		
	
@endif


@if(Session::has('message'))
	
<div class="alert alert-success" style="text-align: center;">{{ Session::get('message') }}</div>
                <div class="clear-both"></div>
		{{Session::forget('message')}}
		
	
@endif

