@extends('layout')
@section('title')
	all notes
@endsection

@section('content')

@inject('carbon', '\Carbon\Carbon')



@if (count($notes) >= 1)
<h1 class="title is-1 has-text-centered mt-5">All notes</h1>
<nav class="navbar is-fixed-top has-text-centered">


	<a href="/create" class="button is-primary" style="margin: 10px 5px"><i class="fa fa-plus mr-2"></i> Create New Note</a>
	{{-- collapse all notes --}}
	<a id="collapse" href="" class="fa fa-expand button is-warning is-inverted" style="margin: 10px 5px"></a>
	{{-- collapse all notes --}}
	<a id="expand" href="" class="fa fa-compress   button is-warning is-inverted" style="margin: 10px 5px"></a>
</nav>
<div class="columns is-multiline">

	@foreach ($notes as $note)
	<div class="column  is-4">
		<div class="card box" draggable="true">
			<header class="card-header">
				<p class="card-header-title">
					{{$note->title}}
				</p>
				<i href="" class="card-header-icon" aria-label="more options">
					<span class="icon">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					
					</span>
				</i>
			</header>
			<div class="card-content">
				<div class="content">
					{{$note->body}}
					
					<time datetime="">
						
						<hr>
						🕒 {{jdate($note->created_at)->format('%A, %d %B %y') }}
						{{-- 🕒 {{$note->created_at->format('Y M d ','Asia/Tehran') }} --}}
						{{--  {{carbon($note->created_at,'Y')}} --}}
					</time>
				</div>
			</div>
			<footer class="card-footer">
				<a href="/{{$note->id}}/edit" class="card-footer-item hero is-warning has-text-centered">Edit</a>
				
				<form action="/{{$note->id}}/destroy" method="POST" style="background: #f14668;">
					@method('DELETE')
					@csrf
					<button type="submit" id="delete" class="button is-danger fa fa-trash"></button>
				</form>
			</footer>
		</div>
		<br>
	</div>
	@endforeach
	@else
	<br> <br>
	
		<div class=" has-background-warning  has-text-centered pl-3">
			<h1 class="title is-1  "> <i class="fa fa-sticky-note is-marginless mr-1"></i>No Note Here</h1> 
			<a href="/create" class="button is-info has-text-centered" style="margin: 10px 5px"> <i class="fa fa-plus is-marginless mr-2"></i> Create Note</a>
		</div>
	
	@endif

</div>


@endsection