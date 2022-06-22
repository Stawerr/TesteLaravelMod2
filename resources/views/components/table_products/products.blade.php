@if (session('status'))
    <div class="alert
    @switch(session('type'))
    @case('error')
        alert-danger
@break
    @default
        alert-success
@endswitch
        alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<h1>Products</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Detail</th>
        <th scope="col">Category</th>
        <th scope="col">Project</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->detail}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->project->name}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td><a class="btn btn-success" href="{{url('products/'.$product->id)}}">Show</a></td>
            <td><a class="btn btn-primary" href="{{url('products/'.$product->id. '/edit')}}">Edit</a></td>
            <form action="{{url('products/' . $product->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{$products->links()}}
</div>

