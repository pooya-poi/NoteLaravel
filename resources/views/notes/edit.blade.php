@extends('layout')
@section('content')
<h1 class="title is-1 has-text-centered">Edit Note</h1>
<br><br><br>
<form action="/{{$note->id}}/edit" method="POST" class="box ml-5 mr-5  pl-4 pr-4">
	@method('PATCH')
	@csrf

	<label class="label">Title</label>
	<input name="title" type="text" class="input" placeholder="Enter Name" value="{{$note->title}}">


	<label class="label">Note</label>
	<p class="control">
		<textarea name="body" class="textarea" placeholder="Textarea">{{$note->body}}</textarea>
	</p>
	<br>



	<div class="level">


			<div class="has-text-centered">
				<button type="submit" class="button is-dark level-item level-left"><i class="fa fa-edit mr-2"></i> Update
					Note</button>
			</div>
	</form>

	<br>


	<form action="/{{$note->id}}/destroy" method="POST" class="has-text-centered">
		@method('DELETE')
		@csrf
		<button type="submit" class="button is-danger level-item level-right is-desktop"> <i class="fa fa-trash mr-2"></i>
			Delete Note</button>
	</form>


</div>
@endsection