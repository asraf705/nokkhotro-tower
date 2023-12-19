@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="content-wrapper">

    {{-- Category from --}}

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Team form </h4>
        <p class="card-description"> Enter your Team  </p>
        <form class="forms-sample" action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">

          @csrf
            
            <div class="form-group">
              <label >Name</label>
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
              <label >Facebook Link</label>
              <input type="url" class="form-control"  name="fb_link">
            </div>

            <div class="form-group">
              <label >LinkedIn Link</label>
              <input type="url" class="form-control"  name="lidin_link">
            </div>

            <div class="form-group">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            

          <button type="submit" class="btn btn-primary d-grid col-12"><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit</button>

        </form>
      </div>
    </div>





  </div>
</div>

@endsection
