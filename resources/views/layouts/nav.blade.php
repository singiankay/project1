<nav class="navbar is-danger">
 	<div class="navbar-brand">
		<a class="navbar-item" href="/"><img src="https://bulma.io/images/bulma-logo-white.png" width="112" height="28"></a>
		<div class="navbar-burger burger" data-target="navMenuColordanger-example">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div id="navMenuColordanger-example" class="navbar-menu">
  		<div class="navbar-start">
  			@if (Auth::check())
  				<a class="navbar-item" href="/posts/create">Add Post</a>
  			@endif
		</div>
		<div class="navbar-end">
			@if (Auth::check())
				<a class="navbar-item">{{ Auth::user()->name }}</a>
				<a class="navbar-item" href="/logout">Logout</a>
			@else
				<a class="navbar-item" href="/login">Login</a>
				<a class="navbar-item" href="/register">Register</a>
			@endif
		</div>
	</div>
</nav>