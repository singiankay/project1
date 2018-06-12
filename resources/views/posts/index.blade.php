@extends('layouts.master')

@section('content')
	<div class="content">
		@foreach ($posts as $post)
			@include('posts.post')	
		@endforeach
	</div>
@endsection

@section('footer')
	{{-- <script src="/js/file.js"></script> --}}
@endsection