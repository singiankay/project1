@extends('layouts.master')

@section('content')
@include('layouts.errors')
	<form method="POST" action="/posts">
		{{ csrf_field() }}
		<h1 class="title">Create a Post</h1>
		<div class="field">
			<label class="label">Title</label>
			 <div class="control">
			   <input type="text" name="title" class="input">
			 </div>
		</div>
		<div class="field">
			<label class="label">Body</label>
			<div class="control">
				<textarea name="body" class="textarea"></textarea>
			</div>
		</div>
		<div class="field is-grouped">
			<div class="control">
				<button type="submit" class="button is-link">Publish</button>
			</div>
			<div class="control">
				<button name="cancel" class="button is-text">Cancel</button>
			</div>
		</div>
	</form>
@endsection