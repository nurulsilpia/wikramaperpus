@extends('admin.layouts.main')
@section('content')
<section class="section">
    <div class="section-header d-block">
      <div class="border-bottom mb-3">
        <h1 class="h2 mb-2">Edit User {{ $user->name }}</h1>
      </div>

      <form action="/admin/user/{{ $user->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name', $user->name) }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username) }}">
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="is_admin" class="form-label">Is Admin</label>
          {{-- <input type="text" class="form-control @error('is_admin') is-invalid @enderror" id="is_admin" name="is_admin" required value="{{ old('is_admin', $user->is_admin) }}"> --}}
          <select class="form-control @error('is_admin') is-invalid @enderror" id="is_admin" name="is_admin" required>
            <option selected disabled>Open this select menu</option>
            <option value="1" <?php if($user->is_admin == 1){ echo 'selected';}?>>Yes</option>
            <option value="0" <?php if($user->is_admin == 0){ echo 'selected';}?>>No</option>
          </select>
          @error('is_admin')
            <div class="invalid-feedback">
              {{ $message }}
             </div>
          @enderror
      </div>

        <button type="submit" class="btn btn-primary">Update User</button>
      </form>
    </div>
</section>
@endsection