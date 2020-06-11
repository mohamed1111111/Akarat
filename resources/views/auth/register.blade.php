@extends('layouts.app')
@section('title')
تسجيل عضوية جديدة
@endsection

@section('content')
<div class="container">
  <div class="contact_botton">

<hr>
<h3>
  تسجيل عضوية جديدة
</h3>
<hr>
<form method="POST" action="{{ route('register') }}">
    @csrf

     <div class="form-group row">

          <label for="name" class="col-md-12 col-form-label text-md-right">{{ __('') }}</label>
          <div class="col-md-12">

            <input id="name" type="text" style="width:500px;"class=" form-control @error('name') is-invalid @enderror" placeholder="اسم المستخدم"name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
          </div>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
     </div>
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

        <div class="col-md-12">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" style="width:500px;" placeholder="البريد الالكتروني" value="{{ old('email') }}" required autocomplete="email" >

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

        <div class="col-md-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  style="width:500px;" placeholder="كلمة المرور" name="password" required autocomplete="new-password" style = "direction: ltr;">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

        <div class="col-md-12">
            <input id="password-confirm" type="password" class="form-control"style="width:500px;"placeholder="تأكيد كلمة المرور" name="password_confirmation" required autocomplete="new-password" style = "direction: ltr;">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-12 offset-md-4">
            <button type="submit" class="btn btn-warning">
                {{ __('انشاء حساب جديد') }}
            </button>
        </div>
    </div>
</form>
</div>
<div class="clearfix">
</div>
<br>
@endsection
