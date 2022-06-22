<div class="col-4 mx-auto mt-4">
    <h1>Show Project</h1>
    <div class="form-group">
        <label for="id">Id</label>
        <input
            class="form-control"
            type="text"
            id="id"
            name="id"
            value="{{$project->id}}"
            required
            disabled
            aria-describedby="nameHelp">

        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

        <label for="name">Name</label>
        <input
            class="form-control"
            type="text"
            id="name"
            name="name"
            value="{{ $project->name }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="name">Product Name</label>
        @foreach($project->products as $product)
        <input
            class="form-control"
            type="text"
            id="name"
            name="name"
            value="{{ $product->name }}"
            required
            disabled
            aria-describedby="nameHelp">
        @endforeach
        <label for="created_at">created_at</label>
        <input
            class="form-control"
            type="text"
            id="created_at"
            name="created_at"
            value="{{ $project->created_at }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="updated_at">updated_at</label>
        <input
            class="form-control"
            type="text"
            id="updated_at"
            name="updated_at"
            value="{{ $project->updated_at }}"
            required
            disabled
            aria-describedby="nameHelp">
    </div>

    <a class="mt-2 mb-5 btn btn-primary" href="{{url('projects/')}}">Back</a>
</div>
