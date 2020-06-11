@extends('admin.layouts.layout')

@section('title')
  Edit Building
  {{$bu->bu_name}}
@endsection


@section('header')


@endsection


@section('content')
<section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>  Edit Building
             {{$bu->bu_name}} </h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">Home</a></li>
             <li class="breadcrumb-item"><a href="{{url('/adminpanel/bu')}}">Building Control</a></li>
             <li class="breadcrumb-item active"><a href="{{url('/adminpanel/bu/'.$bu->id.'edit')}}">  Edit Building
               {{$bu->bu_name}}</a></li>


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
             <h3 class="card-title">  Edit Building
               {{$bu->bu_name}}</h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <form method="POST" action="{{ url('/adminpanel/bu/'.$bu->id.'update') }}">
               @method('PATCH')
             @include('admin.bu.editform')

           </form>




           </div>

         </div>
       </div>
     </div>
   </section>
@endsection



@section('footer')



@endsection
