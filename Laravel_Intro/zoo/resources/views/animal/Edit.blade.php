@extends('layouts.app')

@section('title', 'Animal edition')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Animal</div>
            
                    {!! Form::open(['url' => 'list/update/' . $animal->id, 'method' => 'PUT']) !!}
                        
                        {!! Form::token() !!}


                        <div class="form-group">
                            {!! Form::label('type', 'Type') !!}
                            {!! Form::text('type', $animal->type) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', $animal->name) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('gender', 'Gender') !!}
                            {!! Form::text('gender', $animal->gender) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('age', 'Age') !!}
                            {!! Form::text('age', $animal->age) !!}
                        </div>
                        
                        <div class="from-group">
                            {!! Form::label('height', 'Height') !!}
                            {!! Form::text('height', $animal->height) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
                            
                        </div>


                    {!! Form::close() !!}
        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
