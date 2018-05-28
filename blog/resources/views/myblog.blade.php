@extends('app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>My simple Blog</title>
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/js/bootstrap.js">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/js/jquery-1.11.3.min">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2> Welcome to my Simple Awesome Blog</h2>
					</div>
					<div class="panel-body">
						<a class="btn btn-danger btn-block" href="{{ url('auth/google') }}">Sign in with Google +</a>		
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Latest Articles</h3>
					</div>
					<div class="panel-body">
						<h4>Content</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection