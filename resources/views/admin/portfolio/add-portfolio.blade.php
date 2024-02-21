@extends('admin.master')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="content-wrapper">

            {{-- Category from --}}

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Portfolio form </h4>
                    <p class="card-description"> Enter your portfolio </p>
                    <form class="forms-sample" action="{{ route('portfolios.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">Category Name</label>
                            <select name="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Apartment Address</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="address">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Apartment Description</label>
                            <textarea type="text" class="form-control" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Apartment Image 1</label>
                            <input type="file" name="image_1" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Apartment Image 3</label>
                            <input type="file" name="image_2" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Apartment Image 3</label>
                            <input type="file" name="image_3" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary d-grid col-12"><i
                                class="mdi mdi-file-check btn-icon-prepend"></i> Submit</button>

                    </form>
                </div>
            </div>





        </div>
    </div>
@endsection
