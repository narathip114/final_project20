@extends('app')
  
@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <ul>
                <h2>ข้อมูลรายชื่อเพื่อน</h2></ul>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <ul><a class="btn btn-success" href="{{ url('create') }}"> Create New My Friend's</a></ul>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <div class="container">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="250px">Action</th>
        </tr>
</div>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $product->image }}" width="150px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('destroy',$product->id) }}" method="POST">
      
                    <a class="btn btn-info" href="{{ route('show',$product->id) }}">Show</a>
       
                    <a class="btn btn-primary" href="{{ route('edit',$product->id) }}">Edit</a>
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     
    {!! $products->links() !!}
 
@endsection