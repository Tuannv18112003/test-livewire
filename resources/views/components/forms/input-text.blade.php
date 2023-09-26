@props(['title', 'type', 'name'])

<div class="row mb-3">
    <div class="col-sm-2">
        <h6 class="mb-0">{{ $title }}</h6>
    </div>
    <div class="col-sm-10 text-secondary">
        <input type="{{$type}}" class="form-control" {{ $attributes }} />
        <div>
            @error($name) <span class="mt-2 text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
