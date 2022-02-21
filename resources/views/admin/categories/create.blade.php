@extends('admin.layouts.main')
@section('content')
<section class="section">
    <div class="section-header d-block">
        <div class="border-bottom mb-3">
            <h1 class="h2">Create New Category</h1>
        </div>

        <div class="col-lg-6">
            <form action="/admin/categories" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name Category</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                    @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                </div>

                <button type="submit" class="btn btn-primary">Create Category</button>
            </form>
        </div>
    </div>
</section>
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/admin/categories/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

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