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
                    <th> Category name </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>

                <tbody>
                  @csrf
                  @foreach($categories as $category)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->category_name }}</td>
              
                    <td>  
                      @if($category->status == 1)
                              <a href="{{ route('categories.show',$category->id) }}" class="btn btn-success btn-fw"><i class="mdi mdi-earth"></i>Active</a>
                          @else
                              <a href="{{ route('categories.show',$category->id) }}" class="btn btn-danger btn-fw"><i class="mdi mdi-earth-off"></i>Inactive</a>
                      @endif
                    </td>
                    <td>
                      <table>

                        <tr>
                        <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                        </tr>
                        <tr>  .  </tr>
                        <tr>
                        <form action="{{ route('categories.destroy',$category->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                                <button type="submit"  class="btn btn-danger btn-sm"><i class="mdi mdi-delete-forever"></i>Delete</button>
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
