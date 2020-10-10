@extends('welcome')
@section('content')

<div class="panel">
    <h1>Create a new category</h1>
{!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('category', 'category:')}}
        {{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'any category....' ])}}
    </div>
    {{Form::submit('Submit', ['class'=> 'btn btn-success'])}}
    {!! Form::close() !!}
</div>
    
@endsection