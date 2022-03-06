@extends('admin.layouts.main')
@section('content')
<section class="section">
    <div class="section-header d-block">
        <div class="border-bottom mb-3">
            <h1 class="h2">Admin Galery</h1>
        </div>
        {{-- Validate --}}
        @if(session()->has('success'))
          <div class="alert alert-success col-lg-10" role="alert">
              {{ session('success')}}
          </div>
        @endif
        @if(session()->has('danger'))
          <div class="alert alert-danger col-lg-10" role="alert">
              {{ session('danger')}}
          </div>
        @endif
        {{-- ------------ --}}
        <div class="table-responsive my-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create">
                Add new image
            </button>
            <a href="/galery" class="btn btn-success mb-3 mx-3">See Galery Page</a>
              <table class="table table-striped table-sm mb-3" id="tableAll">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th colspan="2" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($galeries as $galery)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>
                      @if ($galery->image)
                        <div style="max-height: 100px; max-width: 100px; overflow: hidden;">
                          <img src="{{ asset('storage/' . $galery->image) }}" alt="" class="img-fluid img-thumbnail mt-3">
                        </div>
                      @else
                          <img src="https://source.unsplash.com/100x100?books" class="img-fluid mt-3">
                      @endif
                    </td>
                    <td>{{ $galery->judul }}</td>
                    <td>{{ $galery->deskripsi }}</td>
                    <td>
                      <a href="/admin/galery/{{ $galery->judul }}/edit" class="badge bg-warning text-white my-1"><i class="bi bi-pencil-square"></i></a>
                          <form action="/admin/galery/{{ $galery->judul }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0 text-white my-1" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                          </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Image</h5>
        </div>
        <div class="modal-body">
            <form action="/admin/galery" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul') }}">
                  @error('judul')
                    <div class="invalid-feedback">
                      {{ $message }}
                     </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" required value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                      <div class="invalid-feedback">
                        {{ $message }}
                       </div>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Create Galery</button>
                <button type="button" class="btn btn-secondary text-dark mx-3" data-bs-dismiss="modal">Close</button>
            </form>
        </div>
      </div>
    </div>
</div>

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $galery->judul }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src =oFREvent.target.result;
        }
    }
</script>

@endsection