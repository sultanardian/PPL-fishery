@extends('layouts.app')

@section('login-active', 'active')

@section('content')

<!-- Login Form -->
<div class="container mb-5" id="login">
  <div class="text-center mx-auto" id="form-login">
    <form class="form-signin mb-3" action="{{ route('login') }}" method="POST">
      @csrf
      <h1 class="h3 mb-5 font-weight-normal">Silakan masuk</h1>

      <input type="email" id="email" class="form-control mb-3" name="email" placeholder="Alamat email" required autocomplete="off" autofocus>

      <input type="password" id="password" class="form-control mb-3" name="password" placeholder="Password" required autocomplete="off">

      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Masuk</button>
      </div>
    </form>

    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
  </div> 
</div>
@endsection
