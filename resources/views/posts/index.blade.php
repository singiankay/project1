@extends('layouts.master')

@section('content')
	<h1 class="title">Blog Post</h1>
	@foreach ($posts as $post)
		@include('posts.post')	
	@endforeach
@endsection

@section('footer')
	{{-- <script src="/js/file.js"></script> --}}
@endsection