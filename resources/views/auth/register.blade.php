@extends('layouts.app')

@section('register-active', 'active')

@section('content')

<!-- Register Form -->
<div class="container mb-3" id="login">
  <div class="mx-auto" id="form-login">
    <form class="form-signin mb-3" action="{{ route('register') }}" method="POST">
        @csrf
        <h1 class="text-center h3 mb-5 font-weight-normal">Silakan mendaftar</h1>

        <input type="text" id="name" class="form-control mb-4" name="name" placeholder="Nama lengkap" required autocomplete="off" autofocus>

        <input type="email" id="email" class="form-control mb-4" name="email" placeholder="Alamat email" required autocomplete="off" autofocus>

        <div class="mb-4">
            <label>Vendor :</label>
            <div class="form-check">
              <input class="form-check-input" value="1" type="radio" name="vendor" id="vendor1" checked>
              <label class="form-check-label" for="vendor1">
                Pembeli (Perusahaan kuliner, restoran, hotel)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" value="2" type="radio" name="vendor" id="vendor2">
              <label class="form-check-label" for="vendor2">
                Penyedia (Nelayan, pasar ikan)
              </label>
            </div>
        </div>

        <input type="password" id="password" class="form-control mb-4" name="password" placeholder="Password" required autocomplete="off">

        <input id="password-confirm" type="password" class="form-control mb-4" placeholder="Konfirmasi password" name="password_confirmation" required autocomplete="off">

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Daftar</button>
        </div>
    </form>
  </div> 
</div>
@endsection
