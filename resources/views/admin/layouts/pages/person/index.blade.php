@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="d-flex justify-content-between align-items-center mb-3 mt-3" style="padding: 0 15px;">
        <a href="{{route('person.create')}}" class="btn btn-primary" style="font-size: 16px; padding: 10px 20px; margin-left: auto;">
          <i class="lni lni-plus"></i> Add 
        </a>
      </div>
      <div class="card-style mb-30">
        <div class="table-wrapper table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th><h6>ID</h6></th>
                <th><h6>Title</h6></th>
                <th><h6>Content</h6></th>
                <th><h6>Action</h6></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @if($person)
                <td><p>{{$person->id}}</p></td>
                <td class="min-width"><p>{{$person->name}}</p></td>
                <td class="min-width"><p>{{strip_tags(\Illuminate\Support\Str::limit($person->position,100,'...'))}}</p></td>
                <td>
                  <div class="action">
                    <button onclick="document.getElementById('deleteForm').submit()" class="text-danger"  style="font-size: 24px; margin-right: 20px; text-decoration: none; display: inline-flex; align-items: center;">
                      <i class="lni lni-trash-can" style="padding: 8px; border-radius: 5px; background-color: #f8d7da; transition: transform 0.2s ease;"></i>
                    </button>
                    <a class="text-primary" href="{{route('person.edit',['person'=>$person->id])}}" style="font-size: 24px; text-decoration: none; display: inline-flex; align-items: center;">
                      <i class="lni lni-pencil" style="padding: 8px; border-radius: 5px; background-color: #cce5ff; transition: transform 0.2s ease;"></i>
                    </a>
                    <form id="deleteForm" action="{{route('person.destroy',$person->id)}}" method="POST">
                      @csrf
                      @method('delete')
                    </form>
                  </div>
                </td>
                @endif
              </tr>
            </tbody>
          </table>
          <!-- end table -->
        </div>
      </div>
      <!-- end card -->
    </div>
    <!-- end col -->
  </div>
@endsection