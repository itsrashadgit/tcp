@extends('pages.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>TCP - Pages</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pages.create') }}"> Create New Page</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pages as $page)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $page->title }}</td>
            <td>{{ $page->details }}</td>
            <td>
                <form action="{{ route('pages.destroy',$page->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pages.show',$page->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pages.edit',$page->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pages->links() !!}
      
@endsection