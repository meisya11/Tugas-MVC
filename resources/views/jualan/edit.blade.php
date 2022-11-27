@extends('layout.master')

@section('content')
<div class="container">
<h1>Edit Pesanan</h1>
</div><br><br>
<form action="/jualan/{{$jualan->id}}" method="POST">
    @method('put')
    @csrf
    <div class="container">
    <div class="mb-3">
    <input type="text" name="nama" placeholder="Nama" value="{{$jualan->nama}}"></div><br>
    <div class="mb-3">
    <input type="text" name="produk" placeholder="Produk" value="{{$jualan->produk}}"></div><br>
    <div class="mb-3"> 
    <input type="text" name="jumlah" placeholder="Jumlah" value="{{$jualan->jumlah}}"></div><br> 
    <div class="mb-3">    
    <textarea name="alamat"placeholder="Alamat" rows="5" value="{{$jualan->alamat}}"></textarea><br><br>
    <input type="Submit" name="Submit" value="Save" class="btn btn-primary">
    </div>
</div>
</form>
@endsection