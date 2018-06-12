<div class="box">
	<article class="media">
		<div class="media-left">
			<figure class="image is-64x64">
				<img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
			</figure>
		</div>
		<div class="media-content">
			<div class="content">
				<p>
					<a href="/posts/{{ $post->id }}" class="has-text-black"><strong>{{ title_case($post->title) }}</strong></a>
					<small>{{ $post->created_at->diffForHumans() }}</small>
				</p>
				<p>{{ $post->body }}</p>
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
