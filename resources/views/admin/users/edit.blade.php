@extends('admin.layouts.layout')

@section('title')
  Edit user
  {{$user->name}}
@endsection


@section('header')


@endsection


@section('content')
<section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>  Edit user
             {{$user->name}} </h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">Home</a></li>
             <li class="breadcrumb-item"><a href="{{url('/adminpanel/users')}}">Users Control</a></li>
             <li class="breadcrumb-item active"><a href="{{url('/adminpanel/users/'.$user->id.'edit')}}">  Edit user
               {{$user->name}}</a></li>


           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <section class="content">
     <div class="row">
       <div class="col-12">
         <div class="card">
           <div class="card-header">
             <h3 class="card-title">  Edit user
               {{$user->name}}</h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <form method="POST" action="{{ url('/adminpanel/users/'.$user->id.'update') }}">
               @method('PATCH')
             @include('admin.users.editform')

           </form>



           {!!Form::open(['url'=>'/adminpanel/users/changePassword/','method'=>'POST']) !!}
           <input type="hidden" name="user_id" value="{{$user->id}}">
        <div class="text2">
           <div class="form-group row col-md-12">
               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  style="width:500px;" placeholder= "Password " name="password"  required autocomplete="new-password" style = "direction: ltr;">

                  @error('password')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
               <div class="form-group row col-md-4 ">
                   <button type="submit" class="btn btn-warning">
                     <i class="fa fa-btn fa-user" style="color:#ffffff"></i>
                       {{ __('Edit Password ') }}
                   </button>

               </div>
           </div>
        </div>
           {!!Form::close() !!}
           </div>

         </div>
       </div>
     </div>
   </section>
@endsection



@section('footer')



@endsection
