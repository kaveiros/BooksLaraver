@extends('welcome')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">Show product</div>
    <div class="pull-right"><a href="{{url('/categories')}}" class="btn btn-primary">Back</a></div>
    </div>
</div>
<div class="row">
    <div class="col-xs12 col-sm12 col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            {{$category->name}}
        </div>
    </div>
</div>
    
@endsection