
@extends('admin.layouts.layout')

@section('title')
Edit Site Setting
@endsection


@section('header')


@endsection


@section('content')
<section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Edit Site Setting </h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">Home</a></li>
             <li class="breadcrumb-item active"><a href="{{url('/adminpanel/sitesetting')}}">Edit Site Setting </a></li>


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
             <h3 class="card-title">Edit Site Setting </h3>
           </div>

           <div class="card-body">
<form  method="POST" action="{{url('/adminpanel/sitesetting')}}">
{{ csrf_field() }}

  @foreach($SiteSetting as $setting)

                  @if($setting->type==0)
                  <div class="form-group row">
                      <label  for="{{$setting->namesetting}}" class="col-md-4 col-form-label text-md-lift" >{{$setting->slug}}</label>

                      <div class="col-md-12">
                          <input id="{{$setting->namesetting}}" type="text" class="form-control"style="width:500px;"placeholder="{{$setting->value}}" name="{{$setting->namesetting}}"   style = "direction: ltr;">
                      </div>
                  </div>


                  @else
                  <div class="form-group row">
                      <label for="{{$setting->namesetting}}" class="col-md-4 col-form-label text-md-lift">{{$setting->slug}}</label>

                      <div class="col-md-12">
                          <textarea id="{{$setting->namesetting}}" type="text" class="form-control"style="width:500px;"placeholder="{{$setting->value}}" name="{{$setting->namesetting}}"   style = "direction: ltr;"></textarea>
                      </div>
                  </div>


                  @endif
                  @endforeach

                      <div class="col-md-12 offset-md-10">
                        <button type="submit" name="submit"  class="btn btn-app">
                          <i class="fa fa-save"></i>
                          Save
                        </button>

                            </div>


              </form>



           </div>
         </div>
       </div>
     </div>
   </section>
@endsection







@section('footer')



@endsection
