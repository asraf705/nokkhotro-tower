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
                        <th>Sl</th>
                        <th>Location</th>
                        <th>Email</th>
                        <th>Call 1</th>
                        <th>Call 2</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                  @csrf

                  @foreach($contacts as $contact)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->location }}</td>
                    <td>{{ $contact->mail }}</td>
                    <td>{{ $contact->call_1 }}</td>
                    <td>{{ $contact->call_2 }}</td>
                    
                    <td>
                      <table>

                        <tr>
                          <a href="{{ route('contacts.edit',$contact->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
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
