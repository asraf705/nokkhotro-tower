@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="content-wrapper">

             {{-- Category edit --}}

     <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Category</h4>
            <hr/>
            <div class="table-responsive">
                <form class="forms-sample" action="{{ route('teams.update',$team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="exampleInputName1">Client Name</label>
                        <input type="text" value="{{ $team->name }}"name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Designation</label>
                        <input  value="{{ $team->designation }}"name="designation" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <textarea type="text" value="{{ $team->description }}"name="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Facebook Link</label>
                        <input type="url" value="{{ $team->fb_link }}"name="fb_link" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">LinkedIn Link</label>
                        <input type="url" value="{{ $team->lidin_link }}"name="lidin_link" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset($team->image)}}" alt='image' style="height: 80px; width: 80px;3">
                    </div>

                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"><i class="mdi mdi-content-paste"></i>Save</button>
                        </div>
                    </div>

                </form>

            </div>
          </div>
        </div>
      </div>

      {{-- Category edit --}}


  </div>
</div>


@endsection
