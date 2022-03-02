<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    
    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
      
    <div class="container-login">
      <div class="forms-container">
        <div class="signin-signup">
            {{-- Validation --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center mx-auto" role="alert" style="max-width: 380px;">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show text-center mx-auto" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            {{-- ------------------- --}}
            {{-- Sign in form --}}
          <form action="/login" method="POST" class="sign-in-form">
            @csrf
            <img src="/img/logo.png" width="150" class="mb-3">
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
            <button class="btn solid" type="submit">Login</button>
          </form>

          {{-- Sign up form --}}
          <form action="/register" method="POST" class="sign-up-form">
            @csrf
            <img src="/img/logo.png" width="150" class="mb-3">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Name" name="name" id="name" class="@error('name') is-invalid @enderror" autofocus required value="{{ old('name') }}"/>
                @error('name')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" id="username" class="@error('username') is-invalid @enderror" autofocus required value="{{ old('username') }}"/>
              @error('username')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" id="email" class="@error('email') is-invalid @enderror" autofocus required value="{{ old('email') }}"/>
              @error('email')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password" placeholder="Password" required/>
              @error('password')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <button class="btn solid" type="submit">Register</button>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Perpustakaan SMK Wikrama</h3>
            <p class="text-capitalize fst-italic">
              "melayani dengan hati dan teknologi" <br>
              <small class="d-block text-center mt-3">Not Registered? Register Now!</small>
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="/img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Perpustakaan SMK Wikrama</h3>
            <p class="text-capitalize fst-italic">
                "melayani dengan hati dan teknologi" <br>
                <small class="d-block text-center mt-3">Already have account? Sign in</small>
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="/img/reg.svg" class="image" alt=""/>
        </div>
      </div>
    </div>

    <script src="/js/script.js"></script>

    {{-- Boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
