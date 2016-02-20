@if (count($error) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong>
		There were some problems with your input,
		<br><br>
		<ul>
			@foreach ($error->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif