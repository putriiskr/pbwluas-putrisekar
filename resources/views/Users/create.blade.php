@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA USERS</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/users')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" name="user_email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="user_password" class="form-control" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA</label>
                        <input type="text" name="user_nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" name="user_alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="">Nomor Hp</label>
                        <input type="text" name="user_hp" class="form-control" placeholder="Nomor Hp">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection