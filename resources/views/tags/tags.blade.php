@extends('layouts.app')

@section('content')
<form action="{{route('save-tag')}}" method="POST">
    @csrf

    <div class="form-group row mt-4">
        <label for="tag_title" class="col-md-2 col-form-label">Tag Title</label>
        <div class="col-md-10">
            <input name="tag_title" required type="text" class="form-control" id="tag_title" placeholder="Tag Title">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-md-2 col-form-label"></label>
        <div class="col-md-10">
            <button type="submit" class="btn btn-primary">Save New Tag</button>
        </div>
    </div>


</form>

<div class="row">

    @foreach($tags as $tag)
    <div class="col-md-3 mt-2 mb-2 ">
        <div class="card">
            <div class="card-body">
                <h5>
                    {{$tag->title}}
                </h5>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection