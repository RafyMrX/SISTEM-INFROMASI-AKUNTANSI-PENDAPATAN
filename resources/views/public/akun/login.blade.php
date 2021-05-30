@extends('public.layout.main')
@section('judul', 'Login')
@section('content')

    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Form Login</h3>
                </div>
                <form action="{{url('/loginpost') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                    <br>
                    <p class="text-center">Belum punya akun? <a href="{{url('/daftar') }}">Register</a> sekarang!</p>
                </div>
                </form>
            </div>
        </div>
    </div>

<br>
<br>

@endsection