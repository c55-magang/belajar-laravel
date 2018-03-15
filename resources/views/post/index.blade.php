@extends('layouts.app')
@section('title')
Post
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">
						List of posts
					</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Title</th>
								<th>Content</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($posts as $key=>$post)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $post->title }}</td>
								<td>{{ $post->content }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection