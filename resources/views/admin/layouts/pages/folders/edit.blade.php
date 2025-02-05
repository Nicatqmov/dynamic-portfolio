@extends('admin.layouts.master')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 mt-3" style="padding: 0 15px;">
    <a href="{{route('folders.index')}}" class="btn btn-primary"
        style="font-size: 16px; padding: 10px 20px; margin-left: auto;">
        <i class="lni lni-chevron-left"></i> Back
    </a>
</div>
<form action="{{route('folders.update',$folder->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="card-style mb-30">
        <div class="input-style-1">
            <label>Title</label>
            <input value="{{$folder->title}}" name="title" type="text" placeholder="News Title">
        </div>
        <div class="input-style-1">
            <label>Content</label>
            <textarea  placeholder="News Content" name="content" rows="5" data-qb-tmp-id="lt-662575"
                spellcheck="false" data-gramm="false">{{$folder->content}}</textarea>
        </div>
        <button type="submit" class="main-btn active-btn rounded-full btn-hover mt-3">Update</button>
    </div>
</form>
@endsection

@section('script')
<script>
    const imageInput = document.getElementById('formFileLg');
    const imageTag = document.getElementById('newsImage');

    imageInput.addEventListener('change', function () {
        const file = this.files[0]; // Get the selected file
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imageTag.src = e.target.result; // Set the img tag's src to the file's data URL
            };
            reader.readAsDataURL(file); // Read the file as a data URL
        }
    });
</script>
@endsection