@extends('layouts.app')

@section('title')
Create Post
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Create Post</h3>
				</div>
				<div class="panel-body">
					{!! Form::open(['url' => 'post','class' => 'form-horizontal']) !!}

					<div class="form-group">
						{!! Form::label('title', 'Title', ['class' => 'control-label col-sm-4']) !!}
						<div class="col-sm-8">
							{!! Form::text('title', null, ['class' => 'form-control', 'id' => '#']) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::label('content', 'Content', ['class' => 'control-label col-sm-4']) !!}
						<div class="col-sm-8">
							{!! Form::textarea('content', null, ['class' => 'form-control', 'id' => '#']) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-4">
							{!! Form::submit('Create', ['class' => 'btn btn-default']) !!}
						</div>
					</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection