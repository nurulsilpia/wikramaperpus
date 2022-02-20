@extends('layouts.main')
@section('content')
<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
      <h1 class="h2">Post Category</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
      </div>
    @endif

    @if(session()->has('danger'))
      <div class="alert alert-danger col-lg-6" role="alert">
        {{ session('danger') }}
      </div>
    @endif

    <div class="table-responsive col-lg-6">
      <a href="/admin/categories/create" class="btn btn-primary mb-3">Create new category</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category) 
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="/admin/categories/{{ $category->slug }}" class="badge bg-info text-white"><i class="bi bi-eye"></i></span></a>
                    <a href="/admin/categories/{{ $category->slug }}/edit" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                    <form action="/admin/categories/{{ $category->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0 text-white" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                    </form>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
</section>
@endsection