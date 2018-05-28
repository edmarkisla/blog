@extends('layouts.master')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<h4> Welcome, {{ Auth::user()->name }} </h4>
		<div class="row">
		<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<center>
							<h4>Tools</h4>
						</center>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li><a class="btn btn-success btn-block " href="{{ url('auth/google') }}">Author</a></li><br>
							<li><a class="btn btn-info btn-block " href="">Blogs</a></li><br>
							<li><a class="btn btn-danger btn-block " href="}">Comments</a></li><br>
						</ul>

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