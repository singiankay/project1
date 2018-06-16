@extends('layouts.master')
@section('content')
	<section class="section">
		<div class="container">
			@include('layouts.errors')
			<h2 class="title">Sign in</h2>
			<form method="POST" action="/login">
				{{ csrf_field() }}

				<div class="field">
					<label for="email" class="label">Email</label>
					<div class="control has-icons-left has-icons-right">
						<input type="email" name="email" class="input" placeholder="Email input" value="">
						<span class="icon is-small is-left">
							<i class="fas fa-envelope"></i>
						</span>
					</div>
				</div>

				<div class="field">
					<label for="password" class="label">Password</label>
					<div class="control has-icons-left has-icons-right">
						<input type="password" name="password" class="input" value="">
						<span class="icon is-small is-left">
							<i class="fas fa-key"></i>
						</span>
					</div>
				</div>

				<div class="field is-grouped">
					<div class="control">
						<button type="submit" class="button is-link">Login</button>
					</div>
					<div class="control">
						<button class="button is-text">Cancel</button>
					</div>
				</div>		
			</form>
		</div>
	</section>
@endsection