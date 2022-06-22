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
<h1>Projects</h1>
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
    @foreach($projects as $project)
        <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->name}}</td>
            <td>
                @foreach($project->products as $product)
                    <p>{{$product->name}}</p>
                @endforeach
            </td>
            <td>{{$project->created_at}}</td>
            <td>{{$project->updated_at}}</td>
            <td><a class="btn btn-success" href="{{url('projects/'.$project->id)}}">Show</a></td>
            <td><a class="btn btn-primary" href="{{url('projects/'.$project->id. '/edit')}}">Edit</a></td>
            <form action="{{url('projects/' . $project->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{$projects->links()}}
</div>
