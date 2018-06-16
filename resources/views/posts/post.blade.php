<div class="box">
	<article class="media">
		<div class="media-content">
			<div class="content">
				<h2 class="title"><a href="/posts/{{ $post->id }}" class="has-text-black">{{ title_case($post->title) }}</a></h2>
				<p>{{ $post->body }}</p>
				<p>
					<strong>{{ $post->user->name }}</strong>
					<small>{{ $post->created_at->diffForHumans() }}</small>
				</p>
				<nav class="level is-mobile">
					<div class="level-left">
						<a class="level-item" aria-label="reply">
							<span class="icon is-small">
								<i class="fas fa-reply" aria-hidden="true"></i>
							</span>
						</a>
						<a class="level-item" aria-label="retweet">
							<span class="icon is-small">
								<i class="fas fa-retweet" aria-hidden="true"></i>
							</span>
						</a>
						<a class="level-item" aria-label="like">
							<span class="icon is-small">
								<i class="fas fa-heart" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</nav>
			</div>
		</div>
	</article>
</div>

