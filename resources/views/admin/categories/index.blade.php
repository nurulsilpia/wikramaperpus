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
                      <a href="/admin/categories/{{ $category->slug }}/edit" class="badge bg-warning text-white"><i class="bi bi-pencil-square"></i></a>
                      {{-- <button type="button" class="badge bg-warning border-0 text-white" data-bs-toggle="modal" data-bs-target="#updateModal">
                        <i class="bi bi-pencil-square"></i>
                      </button> --}}

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
{{-- Update Modal --}}
{{-- @foreach ($categories as $category)
    
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/admin/categories/{{ $category->id }}" method="POST">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Category</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="nameEdit" value="{{ old('name', $category->name) }}" autofocus required>
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slugEdit" value="{{ old('slug', $category->slug) }}" required>
              @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Category</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endforeach --}}

<script>
  const nameEdit = document.querySelector('#nameEdit');
    const slugEdit = document.querySelector('#slugEdit');
    nameEdit.addEventListener('change', function(){
        fetch('/admin/categories/checkSlug?name=' + nameEdit.value)
        .then(response => response.json())
        .then(data => slugEdit.value = data.slug)
    })
</script>
@endsection