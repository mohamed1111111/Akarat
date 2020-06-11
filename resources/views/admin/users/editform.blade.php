@csrf

 <div class="form-group row">

      <label for="name" class="col-md-12 col-form-label text-md-right">{{ __('') }}</label>
      <div class="col-md-12">

        <input id="name" type="text" style="width:500px;"class=" form-control @error('name') is-invalid @enderror" placeholder="User Name"name="name" value="{{ $user->name }}" required autocomplete="name" autofocus >
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
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" style="width:500px;" placeholder="Email Addres" value=" {{ $user->email }}" required autocomplete="email" >

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<!-- <div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

    <div class="col-md-12">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  style="width:500px;" placeholder= "Password " name="password"  autocomplete="new-password" style = "direction: ltr;">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div> -->

<!-- <div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

    <div class="col-md-12">
        <input id="password-confirm" type="password" class="form-control"style="width:500px;"placeholder="Confirm Password" name="password_confirmation"  autocomplete="new-password" style = "direction: ltr;">
    </div>
</div> -->
<div class="form-group ">
  <div class="col-md-12">
    <select  name="admin">
    <option value="1" {{$user->admin==1?'selected':"" }}> Admin</option>
    <option value="0" {{$user->admin==0?'selected':"" }}>User</option>
    </select>

  </div>
</div>
<div class="form-group row mb-0">
    <div class="col-md-12 offset-md-4">
        <button type="submit" class="btn btn-warning">
          <i class="fa fa-btn " style="color:#ffffff"></i>

            {{ __('Edit User ') }}
        </button>
          @if($user->id!=1)
          <a href="{{url('/adminpanel/users/' . $user->id . '/delete')}} " class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i>Delete User</a>
          @endif

    </div>
  </div>



</form>
