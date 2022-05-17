
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('monsters.update', $monster->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $monster->name }}">
                </div>
                <div class="mb-3">
                  <label for="type" class="form-label">Type</label>
                  <input type="text" class="form-control" id="type" name="type" value="{{ $monster->type }}">
                </div>
                <div class="mb-3">
                    <label for="size" class="form-label">Size</label>
                    <input type="text" class="form-control" id="size" name="size" value="{{ $monster->size }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
