@extends('layouts.app')

@section('content')

<div class="form-wrap">
		<div class="form-signin">
			<form action="">
				<h1 class="h3 mb-3 fw-normal text-center">ログイン</h1>
					<div class="form-group mb-4">
						<label for="" class="">Email</label>
						<input type="email" class="form-control">
					</div>
					<div class="form-group mb-4">
						<label for="">パスワード</label>
						<input type="password" class="form-control">
					</div>
					<div class="form-group">
					<div class="text-center"><a href="" class="btn btn-primary mt-4">ログイン！</a></div>
			</form>
		</div>
	</div>
@endsection