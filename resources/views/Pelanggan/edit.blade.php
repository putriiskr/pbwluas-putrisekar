@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA PELANGGAN</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/pelanggan/' .$row->pelanggan_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA OBAT</label>
                        <select name="pelanggan_id_obat" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($obat as $obt)
                                <option value="{{$obt->obat_id}}">{{$obt->obat_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA</label>
                        <input type="text" name="pelanggan_nama" class="form-control" value="{{$row->pelanggan_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" name="pelanggan_alamat" class="form-control" value="{{$row->pelanggan_alamat}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Nomor Hp</label>
                        <input type="text" name="pelanggan_hp" class="form-control" value="{{$row->pelanggan_hp}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection