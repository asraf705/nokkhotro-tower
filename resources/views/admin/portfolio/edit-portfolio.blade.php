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
                <form class="forms-sample" action="{{ route('portfolios.update',$portfolios->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>

                        <select name="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $portfolios->category_id == $category->id ? 'selected':'' }}>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <input type="text" value="{{ $portfolios->address }}"name="address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input  value="{{ $portfolios->title }}"name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <textarea type="text" value="{{ $portfolios->description }}"name="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Image 1</label>
                        <input type="file" name="image_1" class="form-control">
                        <img src="{{ asset($portfolios->image_1)}}" alt='image 1' style="height: 80px; width: 80px;3">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Image 2</label>
                        <input type="file" name="image_2" class="form-control">
                        <img src="{{ asset($portfolios->image_2)}}" alt='image 2' style="height: 80px; width: 80px;3">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Image 3</label>
                        <input type="file" name="image_3" class="form-control">
                        <img src="{{ asset($portfolios->image_3)}}" alt='image 3' style="height: 80px; width: 80px;3">
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
