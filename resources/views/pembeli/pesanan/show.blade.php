@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<h3>Saya mencari {{ $order['title'] }}</h3>
		</div>
		<div class="col text-right">
			<a href="{{ route('order.edit', $order['id']) }}" style="text-decoration: none;">
				<i class="far fa-edit mx-1" style="color: green"></i>
			</a>
			<i class="far fa-trash mx-1" style="color: red" onclick="event.preventDefault(); document.getElementById('delete-order').submit()"></i>
			<form style="display: none;" action="{{ route('order.destroy', $order['id']) }}" method="POST" id="delete-order">
				@csrf
				@method('delete')
			</form>
		</div>
	</div>
	<hr>
	<p>{{ $order['description'] }}</p>
	<p><strong>Berat yang dibutuhkan : {{ $order['weight'] }} kg</strong></p>
	<hr>
	<h4>Respon penjual / penyedia</h4>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">No.</th>
	      <th scope="col">Nama penyedia</th>
	      <th scope="col">Kisaran berat</th>
	      <th scope="col">Kisaran harga</th>
	      <th scope="col">Status</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Yakub Rohmad</td>
	      <td>1 - 3 kg</td>
	      <td>Rp 20.000 /kg</td>
	      <td>
	      	<span class="badge rounded-pill bg-success">Tersedia</span>
	      </td>
	      <td><a href="">Cek</a></td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>Mhd. Kosim</td>
	      <td>1 - 1 kg</td>
	      <td>Rp 22.000 /kg</td>
	      <td>
	      	<span class="badge rounded-pill bg-warning">Hampir habis</span>
	      </td>
	      <td><a href="">Cek</a></td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td>Komaruddin</td>
	      <td>0 kg</td>
	      <td>Rp 21.000 /kg</td>
	      <td>
	      	<span class="badge rounded-pill bg-danger">Habis</span>
	      </td>
	      <td><a href="">Cek</a></td>
	    </tr>
	  </tbody>
	</table>
</div>

@endsection