@extends('layouts.app')

@section('stok-active', 'active')
@section('content')
<div class="container">
	<form action="{{ route('stock.store') }}" method="POST">
		@csrf

		<div class="row mb-3">
			<label for="stock" class="col-sm-3 form-label">Nama Persediaan</label>
			<div class="col-sm-9">
				<input type="text" name="stock" class="form-control" placeholder="ex: Ikan tuna" aria-describedby="stock" autocomplete="off" autofocus>
			</div>
		</div>

		<div class="row mb-3">
			<label for="total_stock" class="col-sm-3 form-label">Berat persediaan <i class="far fa-exclamation-circle"  data-toggle="tooltip" data-placement="right" title="Berat minimal persediaan adalah 1 kg."></i></label>
			<div class="col-sm-3">
				<div class="input-group mb-3">
					<input type="number" name="total_stock" min="1" class="form-control"aria-describedby="total_stock" autocomplete="off">
					<span class="input-group-text" id="total_stock">kg</span>
				</div>
			</div>
		</div>

		<div class="row mb-3">
			<label for="price" class="col-sm-3 form-label">Harga persediaan per kg <i class="far fa-exclamation-circle"  data-toggle="tooltip" data-placement="right" title="Harga persediaan adalah untuk per kilogramnya. Harga ini akan menjadi pertimbangan pihak pembeli"></i></label>
			<div class="col-sm-3">
				<div class="input-group mb-3">
					<span class="input-group-text" id="price">Rp</span>
					<input type="number" name="price" min="1000" class="form-control"aria-describedby="price" autocomplete="off">
					<span class="input-group-text" id="price">/kg</span>
				</div>
			</div>
		</div>

		<div class="row mb-3">
			<label for="date" class="col-sm-3 form-label">Tanggal penangkapan <i class="far fa-exclamation-circle"  data-toggle="tooltip" data-placement="right" title="Tanggal penangkapan disini adalah tanggal dimana persediaan dipanen/ditangkap"></i></label>
			<div class="col-sm-2">
				<input type="date" name="date" class="form-control"aria-describedby="date" autocomplete="off">
			</div>
		</div>

		<button type="submit" class="btn btn-primary">Tambah persediaan</button>
	</form>
</div>
@endsection