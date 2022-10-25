@extends('layouts.user')
@section('style_css')

@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label>نام کاربری</label>
                <input class="form-control text-start" type="text" name="username">
            </div>
            <div class="col-12">
                <label>پسورد</label>
                <input class="form-control text-start" type="password" name="password">
            </div>
            <div class="col-12">
                <button class="btn btn-info">ورود</button>
            </div>
        </div>
    </div>
@endsection

@section('script_js')
@endsection