@extends('layouts.app')

@section('title')
All Buildings
@endsection
@section('header')
<link rel="stylesheet" href="{{URL::asset('cus/buall.css')}}">

@endsection
@section('content')
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<div class="profile-usermenu pull-left">

					<ul class="nav">
            <div class="">
              <h4>Buildings Show Options</h4>

            </div>

						<li class="active">
							<a href="{{url('/showAllBuilding')}}">
							<i class="glyphicon glyphicon-home"></i>
							All Buildings </a>
						</li>
						<li>
							<a href="{{url('/forRent')}}">
							<i class="glyphicon glyphicon-user"></i>
							For rent </a>
						</li>
						<li>
							<a href="{{url('/forBuy')}}">
							<i class="glyphicon glyphicon-ok"></i>
							For buy </a>
						</li>
            <li>
              <a href="{{url('/type/0')}}">
              <i class="glyphicon glyphicon-user"></i>
              Falt </a>
            </li>
            <li>
              <a href="{{url('/type/1')}}">
              <i class="glyphicon glyphicon-user"></i>
              Challets </a>
            </li>
            <li>
              <a href="{{url('/type/2')}}">
              <i class="glyphicon glyphicon-user"></i>
              Vellas </a>
            </li>

					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
    <div class="col-md-9">
          <div class="profile-content">
            @include('/website/bu/sharefile',['bu'=>$buAll])
            <div class="text-center">
              {{$buAll->appends(Request::except('page'))->render()}}

            </div>
          </div>
  </div>
</div>
</div>

<br>
<br>

@endsection
