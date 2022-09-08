@extends('layouts.dashboard')
@section('isidashboard')
<body class="hold-transition register-page">
    <div class="container w-70">
        @if (session()->has('berhasil'))
        <div class="alert alert-succes alert-dismissable fade show" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>            
        @endif
        <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="#" class="h1">Register Petugas</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Register Petugas Baru</p>
    
          <form action="/register" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" placeholder="Nama Lengkap" required value="{{ old('fullname') }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
              @error('fullname')                  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Nama Pengguna" required value="{{ old('username') }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user-shield"></span>
                </div>
              </div>
              @error('username')                  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required value="{{ old('email') }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              @error('email')                  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="input-group mb-3">
                <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Jabatan" required value="{{ old('jabatan') }}">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user-tie"></span>
                  </div>
                </div>
                @error('jabatan')                  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
              </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @error('password')                  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Ulangi password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
              <!-- /.col -->
              <div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

@endsection