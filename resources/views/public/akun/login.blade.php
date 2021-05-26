@extends('public.layout.main')
@section('judul', 'Login')
@section('content')


<div class="card kotak" style="margin-left: 400px; margin-top: 120px; width: 600px;">
    <p class="text-center font-weight-bold">Login</p>
    <form action="{{url('/nota-pemesanan')}}" method="">

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail">
            </div>
        </div>
        <div class="form-group row">
            <label for="tel" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tel">
            </div>
        </div>

        <div class="form-group row">
            <button style="margin-left: 270px; width: 150px;">Login</button>
        </div>


        <label for="">Belum Punya Akun ? </label>
    </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection