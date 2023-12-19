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
                <form class="forms-sample" action="{{ route('categories.update',$categories->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $categories->id }}">

                    <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" value="{{ $categories->category_name }}"name="category_name" class="form-control">

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
