@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA OBAT</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ url('obat/create')}}">Tambah Data</a>
                </div>
                <table class="table table-warning table-striped-columns">
                    <tr>
                        <td>NO</td>
                        <td>JENIS OBAT</td>
                        <td>NAMA</td>
                        <td>HARGA</td>
                        <td>STOCK</td>
                        <td>EDIT</td>
                        <td>HAPUS</td>
                    </tr>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->obat_id}}</td>
                        <td>{{ $row->jenisobat->jenisobat_nama}}</td>
                        <td>{{ $row->obat_nama}}</td>
                        <td>{{ $row->obat_harga}}</td>
                        <td>{{ $row->obat_stock}}</td>
                        <td><a class="btn btn-info btn-sm float" href="{{url('obat/' .$row->obat_id. '/edit')}}">Edit</a></td>
                        <td>
                            <form action="{{url('obat/' .$row->obat_id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection