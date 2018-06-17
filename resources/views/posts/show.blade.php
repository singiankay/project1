@extends('layouts.master')

@section('content')
	<div class="content">
		<h1 class="title is-spaced">{{ $post->title }}</h1>
		<p>{{ $post->body }}</p>
		@foreach ($post->comments as $comment)
			<article class="media">
				<div class="media-left">
					<figure class="image is-64x64">
						<img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
					</figure>
				</div>
				<div class="media-content">
					<div class="content">
						<p>
							{{-- <strong><a href="#">{{ $user->name }}</a></strong> --}}
							<strong><a href="#">User</a></strong>
						</p>
						<p>
							{{ $comment->body }}
						</p>
						<p>
							<small><a>Like</a> · <a>Reply</a> · {{ $comment->created_at->diffForHumans() }}</small>
						</p>
					</div>
				</div>
			</article>
		@endforeach
	</div>
	<div class="content">
		<h2 class="title">Comments</h2>
		<article class="media">
			<figure class="media-left">
				<p class="image is-64x64">
					<img src="https://bulma.io/images/placeholders/128x128.png">
				</p>
			</figure>
			<div class="media-content">
				<form method="POST" action="/posts/{{ $post->id }}/comments">
					{{ csrf_field() }}
					<div class="field">
						<p class="control">
							<textarea name="body" class="textarea" placeholder="Add a comment..." required></textarea>
						</p>
					</div>
					<div class="field">
						<p class="control">
							<button type="submit" class="button is-link">Post comment</button>
						</p>
					</div>
				</form>
			</div>
		</article>
	</div>
@endsection