<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/css/style.css" />
    <title>Sign In Form</title>
  </head>
  <body>

    {{-- Validation --}}
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    {{-- ------------------- --}}
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="/login" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" id="username" class="@error('username') is-invalid @enderror" autofocus required value="{{ old('username') }}"/>
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required/>
            </div>
            {{-- <input type="submit" value="LOGIN" class="btn solid" /> --}}
            <button class="btn solid" type="submit">Login</button>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <img src="/assets/img/logo.png" class="logo" alt="" height="150"/>
            <h3>Welcome To Perpus Wikrama</h3>
            <p>
              Melayani Dengan Hati Dan Teknologi
            </p>
          </div>
          <!-- <img src="img/log.svg" class="image" alt="" /> -->
          <img src="/assets/img/login.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="/js/script.js"></script>
  </body>
</html>
