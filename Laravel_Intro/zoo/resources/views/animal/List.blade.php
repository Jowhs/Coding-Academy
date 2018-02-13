@extends('layouts.app')

@section('title', 'Animal list')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Animals List</div>

                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Height</th>
                    </thead>
                    <tbody>
                        @foreach($animals as $animal)
                            <tr>
                                <td>{{ $animal->id }}</td>
                                <td>{{ $animal->type }}</td>
                                <td>{{ $animal->name }}</td>
                                <td>{{ $animal->age }}</td>
                                <td>{{ $animal->height }}</td>
                                <td>

                                    {!! Form::open(array('url' => 'list/edit/' . $animal->id, 'method' => 'GET')) !!}


                                        {!! Form::token() !!}

                                        <div class="form-group">

                                            {!! Form::submit('Edit', ['class' => 'btn btn-info']) !!}

                                        </div>


                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    
                                    {!! Form::open(array('url' => 'list/' . $animal->id, 'method' => 'DELETE')) !!}


                                        {!! Form::token() !!}

                                        <div class="form-group">

                                            {!! Form::submit('Delete', ['class' => 'btn btn-info']) !!}

                                        </div>


                                    {!! Form::close() !!}
                                        

                                </td>
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
