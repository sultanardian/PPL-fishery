@extends('layouts.app')

@section('stok-active', 'active')
@section('content')

<div class="container">
  <h3>Persediaan hasil tangkapan</h3>
  <a class="btn btn-success my-3" href="{{ route('stock.create') }}">Tambah persediaan</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama persediaan</th>
        <th scope="col" class="text-center">Total persediaan (kg)</th>
        <th scope="col" class="text-center">Kisaran harga (Rp/kg)</th>
        <th scope="col" class="text-center">Tanggal penangkapan</th>
        <th scope="col" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($datas as $data)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $data->stock }}</td>
        <td class="text-center">{{ $data->total_stock }} kg</td>
        <td class="text-center">Rp {{ $data->price }}/kg</td>
        <td class="text-center">{{ $data->date }}</td>
        <td class="text-center">
          <a href="{{ route('stock.edit', $data->id) }}" style="text-decoration: none;">
            <span class="badge bg-success">
              <i class="far fa-edit mx-1"></i>
              Ubah
            </span>
          </a>
          <a style="cursor: pointer;" onclick="event.preventDefault(); document.getElementById('delete-{{ $data->id }}').submit()">
            <span class="badge bg-danger">
              <i class="far fa-trash mx-1"></i>
              Hapus
              <form style="display: none;" action="{{ route('stock.destroy', $data->id) }}" method="POST" id="delete-{{ $data->id }}">
                @csrf
                @method('delete')
              </form>
            </span>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>  
</div>

@endsection