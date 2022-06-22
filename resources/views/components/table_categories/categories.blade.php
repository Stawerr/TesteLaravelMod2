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
<h1>Categories</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Product Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Options</th>

    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>
                @foreach($category->products as $product)
                    <p>{{$product->name}}</p>
                @endforeach
            </td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
            <td><a class="btn btn-success" href="{{url('categories/'.$category->id)}}">Show</a></td>
            <td><a class="btn btn-primary" href="{{url('categories/'.$category->id. '/edit')}}">Edit</a></td>
            <form action="{{url('categories/' . $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{$categories->links()}}
</div>
