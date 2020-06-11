@if(count($bu)>0)


@foreach($bu as $key=>$b)
  @if($key % 3 == 0 && $key!=0)
  <div class="clearfix">
  </div>
  @endif
  <div class="col-md-3">
    <div class="productbox">
      <img src="{{url('http://lorempixel.com/460/250/')}}" class="img-responsive">
      <div class="producttitle pull-left">{{$b->bu_name}}</div>
      <div>
      <p class="text-justify" pull-right>{{str_limit($b->bu_small_dis,20)}}</p>
    </div>
      <div class="productprice">
        <div class="pull-left">
          <div class="pricetext">{{$b->bu_price}}</div></div>

          <a href="#" class="btn btn-primary btm-sm" role="button">More Details <span class="glyphicon glyphicon-shopping-cart"></span></a></div>
    </div>
  </div>



@endforeach
<div class="clearfix"></div>
<br>
@else
  <div class="alert alert-danger">
    Ther is No Building

  </div>
@endif
