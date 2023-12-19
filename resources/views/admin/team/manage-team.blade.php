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
                                        <th>Client Name</th>
                                        <th>Designation</th>
                                        <th>Description</th>
                                        <th>Facebook Link</th>
                                        <th>LinkedIn Link</th>
                                        <th>image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @csrf

                                    @foreach ($teams as $team)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $team->name }}</td>
                                            <td>{{ $team->designation }}</td>
                                            <td>{{ $team->description }}</td>
                                            <td>{{ $team->fb_link }}</td>
                                            <td>{{ $team->lidin_link }}</td>
                                            <td>
                                                <img src="{{ asset($team->image) }}" alt=""
                                                    style="height: 80px; width: 80px;border-radius:0">
                                            </td>

                                            <td>
                                                @if ($team->status == 1)
                                                    <a href="{{ route('teams.show', $team->id) }}"
                                                        class="btn btn-success btn-fw"><i
                                                            class="mdi mdi-earth"></i>Active</a>
                                                @else
                                                    <a href="{{ route('teams.show', $team->id) }}"
                                                        class="btn btn-danger btn-fw"><i
                                                            class="mdi mdi-earth-off"></i>Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                <table>

                                                    <tr>
                                                        <a href="{{ route('teams.edit', $team->id) }}"
                                                            class="btn btn-primary btn-sm"><i
                                                                class="mdi mdi-file-check btn-icon-prepend"></i>Edit</a>
                                                    </tr>
                                                    <tr> . </tr>
                                                    <tr>
                                                        <form action="{{ route('teams.destroy', $team->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                                    class="mdi mdi-delete-forever"></i>Delete</button>
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
