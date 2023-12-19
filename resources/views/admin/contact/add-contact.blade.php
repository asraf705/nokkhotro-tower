@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="content-wrapper">

    {{-- Category from --}}

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Categorys form </h4>
        <p class="card-description"> Enter your category  </p>
        <form class="forms-sample" action="{{route('contacts.store')}}" method="POST">

          @csrf

          <div class="form-group">
            <label for="exampleInputName1">	Location</label>
            <input type="text" class="form-control" id="exampleInputName1" name="location">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="email" class="form-control" id="exampleInputName1" name="mail">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Call 1</label>
            <input type="text" class="form-control" id="exampleInputName1" name="call_1">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Call 2</label>
            <input type="text" class="form-control" id="exampleInputName1" name="call_2">
          </div>



          <button type="submit" class="btn btn-primary d-grid col-12" ><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit</button>

        </form>
      </div>
    </div>





  </div>
</div>

@endsection
