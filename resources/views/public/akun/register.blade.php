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
                    <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><strong>Nama</strong></label>
                                <input type="text" name="name_pal" class="form-control @error('name_pal') is-invalid @enderror" placeholder="Nama " value="{{old('name_pal')}}">
                                @error('name_pal')
                                <div class="invalid-feedback">
                                    Nama Harus Diisi
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><strong>Nama Lengkap</strong></label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap" value="{{old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">
                                    Nama Lengkap Harus Diisi
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Alamat</strong></label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Alamat Lengkap" value="{{old('address')}}">
                        @error('address')
                        <div class="invalid-feedback">
                            Alamat Harus Diisi
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for=""><strong>No. Telpon</strong></label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Nomor Telpon" value="{{old('phone')}}">
                        @error('phone')
                        <div class="invalid-feedback">
                            No Hp Harus Diisi
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            Email Harus Diisi & format harus benar
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Konfirmasi Password</strong></label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password">
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
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