@extends('layout')

@section('content')
<h1 class="title has-text-centered">Create Note</h1>
<form action="/create" method="POST" class="box ml-5 mr-5  pl-4 pr-4 has-background-light">
	@csrf

	<label class="label">Title</label>
	<input name="title" type="text" class="input" placeholder="Enter Name">

	<label class="label">Note</label>
	
	<p class="control">
		<textarea name="body" class="textarea" placeholder="Textarea"></textarea>
	</p>
	<br>
	<div class="has-text-centered">
		<button type="submit" class="button is-dark has-text-centered"> <i class="fa fa-plus mr-2"></i> Create Note</button>
	</div>
</form>
@endsection