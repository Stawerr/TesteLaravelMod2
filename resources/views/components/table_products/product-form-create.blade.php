<div class="col-4 mx-auto mt-4">
    <h1>Add Product</h1>
    <form method="POST" action="{{ url('products') }}">
        @csrf
        <div class="form-group ">
            <p></p>
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type name"
                class="form-control
            @error('name') is-invalid @enderror"
                value="{{ old('name') }}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror
            <label for="detail">Detail</label>
            <input
                type="text"
                id="detail"
                name="detail"
                autocomplete="detail"
                placeholder="Detail"
                class="form-control
            @error('detail') is-invalid @enderror"
                value="{{ old('detail') }}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('detail')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option name="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <select name="project_id" id="project_id" class="form-control">
                @foreach($projects as $project)
                    <option name="project_id" value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
