@extends('layouts.app')

@section('content')

	<div class="form-wrap">
		<div class="form-signin">
			<form action="">
				<h1 class="h3 mb-3 fw-normal text-center">新規登録</h1>
					<div class="form-group mb-4 text-justify">
						<label for="">名前</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group mb-4">
						<label for="" class="">Email</label>
						<input type="email" class="form-control">
					</div>
					<div class="form-group mb-4">
						<label for="">パスワード</label>
						<input type="password" class="form-control">
					</div>
					<div class="form-group">
					<label for="">パスワード確認</label>
						<input type="password" class="form-control">
					</div>
					<div class="text-center"><a href="" class="btn btn-danger mt-4">登録！</a></div>
			</form>
		</div>
	</div>

@endsection