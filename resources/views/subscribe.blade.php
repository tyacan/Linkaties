@extends('layouts.app')
@section('subtitle', '')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Dashboard</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						<script src="https://gumroad.com/js/gumroad.js"></script>
						<a class="gumroad-button"
						   href="https://gum.co/KbhzX?wanted=true&email={{ auth()->user()->email }}&user_id={{auth()->id()}}"
						   target="_blank">
							اشترك الان
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
