@extends('admin.layouts.main')
@section('content')
<section class="section">
    <div class="section-header d-block">
        <div class="border-bottom mb-3">
            <h1 class="h2 mb-2">Data User</h1>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success')}}
        </div>
        @endif

        @if(session()->has('delete'))
        <div class="alert alert-danger" role="alert">
            {{ session('delete')}}
        </div>
        @endif
        
        <div class="table-responsive">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create">
                Add New User
            </button>

            <table class="table table-striped table-sm" id="tableAll">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $users as $user)
                  <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $user->name }} </td>
                      <td> {{ $user->username }} </td>
                      <td> {{ $user->email }} </td>
                      {{-- <td class="text-center">
                        <a href="/admin/user/{{ $user->id }}/edit" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                        <form action="/admin/user/{{ $user->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0 text-white" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                        </form>
                      </td> --}}
                      <td class="text-center">
                        <div class="btn-group dropstart">
                          <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- <i class="bi bi-three-dots-vertical"></i> --}}
                          </button>
                          <ul class="dropdown-menu px-3">
                            <li class="mb-1 text-center"><a class="dropdown-item btn btn-warning text-white" href="/admin/user/{{ $user->id }}/edit"><i class="bi bi-pencil-square"></i> Edit Data</a></li>
                            <li class="text-center">
                              <form action="/admin/user/{{ $user->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button style="width: 100%;" class="btn btn-danger border-0 text-white" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i> Delete Data</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</section>
@endsection