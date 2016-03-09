@if(Session::has('success'))
	<script>
		window.onload = function(e){ 
			Materialize.toast("{{Session::get('success')}}", 3000);
		}
	</script>
@endif

@if(count($errors))
	@foreach ($errors->all() as $error)
		<script>
			window.onload = function(e){ 
				Materialize.toast("{{$error}}", 3000);
			}
		</script>
	@endforeach
@endif