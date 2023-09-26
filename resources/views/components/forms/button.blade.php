@props(['title', 'class'])

<div>
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-10 text-secondary">
            <button class="btn btn-{{$class}}" type="submit">{{$title}}</button>
        </div>
    </div>
</div>
