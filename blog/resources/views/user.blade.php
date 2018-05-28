@extends('layouts.master')
<!DOCTYPE html>
<html>
<head>
	<title>Author</title>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><h4>Welcome, {{ Auth::user()->name }}</h4><li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading ">
						<h4>
							blog <a class="btn btn-success pull-right" href="{{ route('/auth/addblog') }}">Add Blog <span class="glyphicon glyphicon-plus"></span></a>
						</h4> 
					</div>	
					<div class="panel-body">
						List of blogs
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Blog content</h4>
					</div>
					<div class="panel-body">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>