@extends('admin.layouts.layout')

@section('title')
  add Building
@endsection


@section('header')


@endsection


@section('content')
<section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Add Building </h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">Home</a></li>
             <li class="breadcrumb-item"><a href="{{url('/adminpanel/bu')}}">Building Control</a></li>
             <li class="breadcrumb-item active"><a href="{{url('/adminpanel/bu/create')}}">Add New Building</a></li>


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
             <h3 class="card-title">Add New Building </h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <form method="POST" action="{{ url('/adminpanel/bu') }}">

             @include('admin.bu.form')
           </form>
           </div>
         </div>
       </div>
     </div>
   </section>
@endsection



@section('footer')



@endsection
