@extends('app')

@section('content')
<div class="container">
	<div class="panel-body">

	</div>
	<div class="row">
		<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2> Welcome! {{ Auth::user()->name }} </h2>
					</div>
					<div class="panel-body">
						<a class="btn btn-danger " href="{{ url('auth/google') }}">Blog</a>		
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
@endsection
