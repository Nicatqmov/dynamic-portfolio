@extends('admin.layouts.master')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 mt-3" style="padding: 0 15px;">
    <a href="{{route('person.index')}}" class="btn btn-primary"
        style="font-size: 16px; padding: 10px 20px; margin-left: auto;">
        <i class="lni lni-chevron-left"></i> Back
    </a>
</div>
<form action="{{route('person.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-style mb-30">
        <div class="input-style-1">
            <label>Title</label>
            <input value="{{old('title')}}" name="name" type="text" placeholder="Name Surname">
        </div>
        <div class="input-style-1">
            <label>Content</label>
            <textarea id="description" placeholder="Position" name="position" rows="5" data-qb-tmp-id="lt-662575"
                spellcheck="false" data-gramm="false">{{old('description')}}</textarea>
        </div>
        <button type="submit" class="main-btn active-btn rounded-full btn-hover mt-3">Create</button>
    </div>
</form>
@endsection