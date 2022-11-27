@extends('layout.master')

@section('content')
    <div class="container">
        <tr>
            <a class="btn btn-primary" href="/jualan/create">Tambah Pesanan</a>
        <table class="table table-striped table-hover" border="4">
            <td>Nama</td>
            <td>Produk</td>
            <td>Jumlah</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        @foreach ( $jualan as $j )
        <tr>
            <td>{{$j->nama}}</td>
            <td>{{$j->produk}}</td>
            <td>{{$j->jumlah}}</td>
            <td>{{$j->alamat}}</td>
            <td>
                <a href="/jualan/{{$j->id}}/edit" class="btn btn-primary">Edit</a>
                <form action="/jualan/{{$j->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection

