@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="content-wrapper">

             {{-- Category from --}}

     <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Manage Category</h4>
            <p class="card-description"> Manage Category Table </p>
            <div class="table-responsive">
              <table class="table table-bordered">


                <thead>
                  <tr>
                    <th> Sl </th>
                    <th>Category Name</th>
                    <th>Address</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>

                <tbody>
                  @csrf
                  @foreach($portfolios as $portfolio)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $portfolio->categories->category_name }}</td>
                    <td>{{ $portfolio->address }}</td>
                    <td>{{ $portfolio->title }}</td>
                    <td>{{ $portfolio->description }}</td>
                    <td>
                      <img src="{{ asset($portfolio->image_1) }}" alt="" style="height: 80px; width: 80px;border-radius:0">
                    </td>
                    <td>
                      <img src="{{ asset($portfolio->image_2) }}" alt="" style="height: 80px; width: 80px;border-radius:0">
                    </td>
                    <td>
                      <img src="{{ asset($portfolio->image_3) }}" alt="" style="height: 80px; width: 80px;border-radius:0">
                    </td>

                    <td>
                      @if($portfolio->status == 1)
                              <a href="{{ route('portfolios.show',$portfolio->id) }}" class="btn btn-success btn-fw"><i class="mdi mdi-earth"></i>Active</a>
                          @else
                              <a href="{{ route('portfolios.show',$portfolio->id) }}" class="btn btn-danger btn-fw"><i class="mdi mdi-earth-off"></i>Inactive</a>
                      @endif
                    </td>
                    <td>
                      <table>

                        <tr>
                          <a href="{{ route('portfolios.edit',$portfolio->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                        </tr>
                        <tr>  .  </tr>
                        <tr>
                          <form action="{{ route('portfolios.destroy',$portfolio->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm"><i class="mdi mdi-delete-forever"></i>Delete</button>
                          </form>
                        </tr>
                      </table>

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      {{-- Category from --}}


  </div>
</div>


@endsection
