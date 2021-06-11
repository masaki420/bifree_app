@extends('layouts.app')

@section('content')

<div class="container">
	<div class="form-wrap">
		<div class="form-signin align-content-center col-xs-8 justify-content-center">
			<div class="row">
				<form action="">
					<h1 class="h3 mb-3 fw-normal text-center">ログイン</h1>
						<div class="mb-4">
							<div class="row justify-content-center">
								<div class="col-sm-8 row col-md-5">
									<label for="" class="">Email</label>
							<input type="email" class="form-control col-xs-10">
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-sm-8 col-xs-4 col-md-5">
							<label for="">パスワード</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group">
						<div class="text-center"><a href="" class="btn btn-primary mt-4">ログイン！</a></div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection