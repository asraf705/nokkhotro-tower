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
                <form class="forms-sample" action="{{ route('contacts.update',$contact->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="exampleInputName1">Location</label>
                        <input type="text" value="{{ $contact->location }}"name="location" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" value="{{ $contact->mail }}"name="mail" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Call 1</label>
                        <input type="text" value="{{ $contact->call_1 }}"name="call_1" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Call 2</label>
                        <input type="text" value="{{ $contact->call_2 }}"name="call_2" class="form-control">
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
