@extends('layouts.app')

@section('beranda-active', 'active')

@section('content')

	@guest
		<p>Guest</p>
	@else
		@if(Auth::user()->vendor == 1)
			@include('pembeli.index')
		@elseif(Auth::user()->vendor == 2)
			@include('penjual.index')
		@endif
	@endguest

@endsection
