@extends('layouts.master')

@section('content')
	<section class="section">
		<div class="container">
			<div class="columns">
				<div class="column">
					@foreach ($posts as $post)
						@include('posts.post')	
					@endforeach
				</div>
				<div class="column is-one-quarter">
					@include('posts.archives')
				</div>
			</div>
		</div>
	</section>
@endsection

@section('footer')
	{{-- <script src="/js/file.js"></script> --}}
@endsection