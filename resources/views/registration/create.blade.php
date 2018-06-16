@extends('layouts.master')

@section('content')
	<section class="section">
		<div class="container">
			@include('layouts.errors')
			<h2 class="title">Register</h2>
			<form method="POST" action="/register">
				{{ csrf_field() }}
				<div class="field">
					<label for="name" class="label">Name</label>
					<div class="control">
						<input type="text" name="name" class="input">
					</div>
				</div>

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

				<div class="field">
					<label for="password_confirmation" class="label">Password Confirmation</label>
					<div class="control has-icons-left has-icons-right">
						<input type="password" name="password_confirmation" class="input" value="">
						<span class="icon is-small is-left">
							<i class="fas fa-key"></i>
						</span>
					</div>
				</div>

				<div class="field is-grouped">
					<div class="control">
						<button type="submit" class="button is-link">Register</button>
					</div>
					<div class="control">
						<button class="button is-text">Cancel</button>
					</div>
				</div>		
			</form>
		</div>
	</section>
@endsection