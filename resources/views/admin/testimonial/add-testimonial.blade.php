@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="content-wrapper">

    {{-- Category from --}}

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Testimonial form </h4>
        <p class="card-description"> Enter your Testimonial  </p>
        <form class="forms-sample" action="{{route('testimonials.store')}}" method="post" enctype="multipart/form-data">

          @csrf
            
            <div class="form-group">
              <label >Client Name</label>
              <input type="text" class="form-control"  name="name">
            </div>

            <div class="form-group">
              <label >Designation</label>
              <input type="text" class="form-control"  name="designation">
            </div>
            
            <div class="form-group">
                <label for="exampleInputName1">Description</label>
                <textarea type="text" class="form-control" name="description"></textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

          <button type="submit" class="btn btn-primary d-grid col-12" ><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit</button>

        </form>
      </div>
    </div>





  </div>
</div>

@endsection
