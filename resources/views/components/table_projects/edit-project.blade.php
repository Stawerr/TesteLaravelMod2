<div class="col-4 mx-auto mt-4">
    <h1>Edit Project</h1>
    <form method="POST" action="{{ url('projects/' . $project->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group ">
            <label for="name">name</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control
            @error('name') is-invalid @enderror"
                value="{{ $project->name }}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('brand')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror
        </div>
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
