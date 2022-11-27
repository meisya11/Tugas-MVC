@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Menambah Pesanan</h1>
        <form action="/jualan/store" method="POST">
            @csrf
            <div class="mb-3">
            <input type="text" name="nama" placeholder="Nama"></div><br>
            <div class="mb-3">
            <input type="text" name="produk" placeholder="Produk"></div><br>
            <div class="mb-3">  
            <input type="text" name="jumlah" placeholder="Jumlah"></div><br>
            <div class="mb-3">     
            <textarea name="alamat" placeholder ="Alamat" rows="5"></textarea></div><br>
            <input type="Submit" name="Submit" value="Save" class="btn btn-primary">
        </form>
    </div>
    
@endsection
