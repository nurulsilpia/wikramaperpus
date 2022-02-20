@extends('layouts.main')
@section('content')
<section class="section">
  <div class="section-header d-block">
    <div class="border-bottom mb-3">
        <h1 class="h2">My Article</h1>
    </div>
    
    
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-10" role="alert">
        {{ session('success') }}
      </div>
    @endif

    @if(session()->has('danger'))
      <div class="alert alert-danger col-lg-10" role="alert">
        {{ session('danger') }}
      </div>
    @endif

    <div class="table-responsive col-lg-10">
      <a href="/admin/posts/create" class="btn btn-primary mb-3">Create new post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post) 
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/admin/posts/{{ $post->slug }}" class="badge bg-info text-white"><i class="bi bi-eye"></i></span></a>
                    <a href="/admin/posts/{{ $post->slug }}/edit" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                    <form action="/admin/posts/{{ $post->slug }}" method="post" class="d-inline">
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
  </section>
@endsection