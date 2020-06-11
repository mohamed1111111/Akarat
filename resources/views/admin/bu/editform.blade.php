@csrf
<div class="form-group row">
  @if($errors->any())
   <div class="alert alert-danger">
     <ul>
       @foreach($errors->all() as $error)
       <li>{{$error}}</li>
       @endforeach
     </ul>

   </div>
   @endif
       <div class="col-md-12 form-group row">
         <label  for="bu_name" class="col-md-2 col-form-label text-md-lift" >Building Name</label>

           <input id="bu_name" type="text" class="form-control"style="width:500px;"placeholder="Add Building name" name="bu_name" value="{{$bu->bu_name}}"  style = "direction: ltr;" >
        @error('bu_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="col-md-12 form-group row">
        <label  for="rooms" class="col-md-2 col-form-label text-md-lift" >Building Rooms</label>

          <input id="rooms" class="form-control"style="width:500px;"placeholder="Add Number Of Rooms" name="rooms" value="{{$bu->rooms}}"   style = "direction: ltr;" >
       @error('rooms')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
       @enderror
     </div>


 <div class="col-md-12 form-group row">
   <label  for="bu_price" class="col-md-2 col-form-label text-md-lift" >Building Price</label>

     <input id="bu_price"  class="form-control"style="width:500px;"placeholder="Add Building Price" name="bu_price"  value="{{$bu->bu_price}}"  style = "direction: ltr;" >
  @error('bu_price')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
</div>

<div class="col-md-12 form-group row">
  <label  for="bu_rent" class="col-md-2 col-form-label text-md-lift" >Building Rent</label>
  <select  class="col-md-4 col-form-label text-md-lift" name="bu_rent">
  <option value="1" {{$bu->bu_rent==1?'selected':"" }} > owning</option>
  <option value="0" {{$bu->bu_rent==0?'selected':"" }}> rent </option>
  </select>
 @error('bu_rent')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
 @enderror
</div>

<div class="col-md-12 form-group row">
 <label  for="bu_square" class="col-md-2 col-form-label text-md-lift" >Building Square</label>

   <input id="bu_square"  class="form-control"style="width:500px;"placeholder="Add Building Square" name="bu_square" value="{{$bu->bu_square}}"   style = "direction: ltr;" >
@error('bu_square')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>


<div class="col-md-12 form-group row">
<label  for="bu_type" class="col-md-2 col-form-label text-md-lift" >Building type</label>
<select  class="col-md-4 col-form-label text-md-lift" name="bu_type">
<option value="0" {{ $bu->bu_type==0?   'selected':""}}> Flat </option>
<option value="1" {{ $bu->bu_type==1?  'selected':"" }}>Chalet</option>
<option value="2" {{ $bu->bu_type==2?  'selected':"" }}>Vella</option>

</select>
@error('bu_type')
 <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
 </span>
@enderror
</div>

<div class="col-md-12 form-group row">
<label  for="bu_status" class="col-md-2 col-form-label text-md-lift" >Building Status</label>
<select  class="col-md-4 col-form-label text-md-lift" name="bu_status">
<option value="0" {{$bu->bu_status==0?'selected':"" }} > Active </option>
<option value="1" {{$bu->bu_status==1?'selected':"" }}> Deactive</option>

</select>
@error('bu_status')
 <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
 </span>
@enderror
</div>

<div class="col-md-12 form-group row">
<label  for="bu_meta" class="col-md-2 col-form-label text-md-lift" >Building Keywords</label>

<input id="bu_meta" type="text" class="form-control"style="width:500px;"placeholder="Add Building Keywords" name="bu_meta" value="{{$bu->bu_meta}}"   style = "direction: ltr;" >
@error('bu_meta')
 <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
 </span>
@enderror
</div>

<div class="col-md-12 form-group row">
<label  for="bu_meta" class="col-md-2 col-form-label text-md-lift" >Building Small Discreption</label>

<textarea id="bu_small_dis" type="text" rows="2" class="form-control"style="width:500px;"placeholder="Add Building Small Discreption" name="bu_small_dis" value="{{$bu->bu_small_dis}}"    style = "direction: ltr;" >{{$bu->bu_small_dis}}</textarea>
@error('bu_small_dis')
 <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
 </span>
@enderror
</div>

<div class="col-md-12 form-group row">
<label  for="bu_longitude" class="col-md-2 col-form-label text-md-lift" >Building Longitude</label>

<input id="bu_longitude"  class="form-control"style="width:500px;"placeholder="Add Building Longitude" name="bu_longitude" value="{{$bu->bu_longitude}}"   style = "direction: ltr;" >
@error('bu_longitude')
 <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
 </span>
@enderror
</div>

<div class="col-md-12 form-group row">
<label  for="bu_latitude" class="col-md-2 col-form-label text-md-lift" >Building Latitude</label>

<input id="bu_latitude" class="form-control"style="width:500px;"placeholder="Add Building Longitude" name="bu_latitude" value="{{$bu->bu_latitude}}"   style = "direction: ltr;" >
@error('bu_latitude')
 <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
 </span>
@enderror
</div>

<div class="col-md-12 form-group row">
<label  for="bu_long_dis" class="col-md-2 col-form-label text-md-lift" >Building Full Discreption</label>

<textarea id="bu_long_dis" type="text" rows="4" class="form-control"style="width:500px;"placeholder="Add Building Full Discreption" name="bu_long_dis" value="{{$bu->bu_long_dis}}"   style = "direction: ltr;" >{{$bu->bu_long_dis}}</textarea>
@error('bu_long_dis')
 <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
 </span>
@enderror
</div>














</div>
    <div class="col-md-12 offset-md-4">
        <button type="submit" class="btn btn-warning">
          <i class="fa fa-btn " style="color:#ffffff"></i>

            {{ __('Edit Building ') }}
        </button>

          <a href="{{url('/adminpanel/bu/' . $bu->id . '/destroy')}} " class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i>Delete Building</a>
        </div>






</form>
