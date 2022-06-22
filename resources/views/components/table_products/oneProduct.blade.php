<div class="col-4 mx-auto mt-4">
    <h1>Show Products</h1>
    <div class="form-group">
        <label for="id">Id</label>
        <input
            class="form-control"
            type="text"
            id="id"
            name="id"
            value="{{$product->id}}"
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
            value="{{ $product->name }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="detail">Detail</label>
            <input
                class="form-control"
                type="text"
                id="detail"
                name="detail"
                value="{{ $product->detail }}"
                required
                disabled
                aria-describedby="nameHelp">
        <label for="category">Category</label>
        <input
            class="form-control"
            type="text"
            id="category"
            name="category"
            value="{{ $product->category->name }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="project">Project</label>
        <input
            class="form-control"
            type="text"
            id="project"
            name="project"
            value="{{ $product->project->name }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="created_at">created_at</label>
        <input
            class="form-control"
            type="text"
            id="created_at"
            name="created_at"
            value="{{ $product->created_at }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="updated_at">updated_at</label>
        <input
            class="form-control"
            type="text"
            id="updated_at"
            name="updated_at"
            value="{{ $product->updated_at }}"
            required
            disabled
            aria-describedby="nameHelp">
    </div>

    <a class="mt-2 mb-5 btn btn-primary" href="{{url('products/')}}">Back</a>
</div>
