@extends('welcome')
@section('content')


    <div class="panel">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <h2>Create new book category</h2>
                        </div>
                        <div class="center-block"></div>
                            <div class="float-right">
                            <a class="btn btn-success" href="/categories-create"> Create New Category</a>
                            </div>
                
                       
                    </div>
                </div>

        <table class="table table-bordered">
            <tr>
                <th>@sortablelink('id')</th>
                <th>@sortablelink('name')</th>
                <th>@sortablelink('created_at')</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{$category->created_at}}</td>
                <td>
                    <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ url('/show/'.$category->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ url('/edit/'.$category->id) }}">Edit</a>
   
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
      
        {!! $categories->links() !!}

    </div>
    
@endsection