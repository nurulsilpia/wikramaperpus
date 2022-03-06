@extends('admin.layouts.main')
@section('content')
<section class="section">
    <div class="section-header d-block">
        <div class="border-bottom mb-3">
            <h1 class="h2">Admin Edit Galery {{ $galery->judul }}</h1>
        </div>

        <div class="col-lg-8">
            <form action="/admin/galery/{{ $galery->judul }}" class="mb-5" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="hidden" name="oldImage" value="{{ $galery->image }}">
                    
                    <img src="{{ asset('storage/' . $galery->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                   
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul', $galery->judul) }}">
                  @error('judul')
                    <div class="invalid-feedback">
                      {{ $message }}
                     </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" required value="{{ old('deskripsi', $galery->deskripsi) }}">
                    @error('deskripsi')
                      <div class="invalid-feedback">
                        {{ $message }}
                       </div>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update Galery</button>
            </form>
        </div>
    </div>
</section>

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