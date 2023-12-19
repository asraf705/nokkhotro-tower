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
                <form class="forms-sample" action="{{ route('testimonials.update',$testimonial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="exampleInputName1">Client Name</label>
                        <input type="text" value="{{ $testimonial->name }}"name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Designation</label>
                        <input  value="{{ $testimonial->designation }}"name="designation" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <textarea type="text" value="{{ $testimonial->description }}"name="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset($testimonial->image)}}" alt='image' style="height: 80px; width: 80px;3">
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
