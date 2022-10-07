<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.main_template')
@section('title') Login Page @endsection
@section('content')

<div class="container align-items-center mt-5">
        
    <form class="col-xs-12 offset-xs-0 col-md-4 offset-md-4" action="dashboard.html">
        <p class="text-center mb-5"><img src="{{asset('assets/images/logo.jpg')}}" width="150"></p>
        <div class="form-group row mb-3">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="email" id="email" placeholder="ป้อนอีเมล์">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="password" placeholder="ป้อนรหัสผ่าน">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
                <input type="submit" class="btn btn-block btn-primary" value="Login">
            </div>
        </div>
    </form>

</div>


@endsection