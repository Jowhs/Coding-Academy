@extends('layouts.app')

@section('content')

<h1>Add Animal</h1>

	{!! Form::open(['url' => 'add']) !!}

		{!! Form::token() !!}

		<div class="form-group">
			{!! Form::label('name', 'Type') !!} <br>
			{!! Form::text('type') !!}
		</div>

		<div class="form-group">
			{!! Form::label('name', 'Name') !!} <br>
			{!! Form::text('name') !!}
		</div>

		<div class="form-group">
			{!! Form::label('name', 'Gender') !!} <br>
			{!! Form::text('gender') !!}
		</div>

		<div class="form-group">
			{!! Form::label('name', 'Age') !!} <br>
			{!! Form::number('age') !!}
		</div>

		<div class="form-group">
			{!! Form::label('name', 'Height') !!} <br>
			{!! Form::number('height') !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Submit') !!}
		</div>

	{!! Form::close() !!}

@endsection
	