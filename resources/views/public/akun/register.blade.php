@extends('public.layout.main')
@section('judul', 'Login')
@section('content')
<br>
    <div class="container">
        <div class="span 12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Form Register</h3>
                </div>
                <form action="{{url('/postregister') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><strong>Nama Lengkap</strong></label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Alamat</strong></label>
                        <input type="text" name="address" class="form-control" placeholder="Alamat Lengkap">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>No. Telpon</strong></label>
                        <input type="text" name="phone" class="form-control" placeholder="Nomor Telpon">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Konfirmasi Password</strong></label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <br>
                    <p class="text-center">Sudah punya akun? <a href="{{url('/login') }}">Login</a> sekarang!</p>
                </div>
                </form>
            </div>
        </div>
    </div>
<br>


@endsection 