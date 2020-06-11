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

               <input id="bu_name" type="text" class="form-control"style="width:500px;"placeholder="Add Building name" name="bu_name"   style = "direction: ltr;" >
            @error('bu_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="col-md-12 form-group row">
            <label  for="rooms" class="col-md-2 col-form-label text-md-lift" >Building Rooms</label>

              <input id="rooms" class="form-control"style="width:500px;"placeholder="Add Number Of Rooms" name="rooms"   style = "direction: ltr;" >
           @error('rooms')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
         </div>


     <div class="col-md-12 form-group row">
       <label  for="bu_price" class="col-md-2 col-form-label text-md-lift" >Building Price</label>

         <input id="bu_price"  class="form-control"style="width:500px;"placeholder="Add Building Price" name="bu_price"   style = "direction: ltr;" >
      @error('bu_price')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="col-md-12 form-group row">
      <label  for="bu_rent" class="col-md-2 col-form-label text-md-lift" >Building Rent</label>
      <select  class="col-md-4 col-form-label text-md-lift" name="bu_rent">
      <option value="1" > owning</option>
      <option value="0" > rent </option>
      </select>
     @error('bu_rent')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
   </div>

   <div class="col-md-12 form-group row">
     <label  for="bu_square" class="col-md-2 col-form-label text-md-lift" >Building Square</label>

       <input id="bu_square"  class="form-control"style="width:500px;"placeholder="Add Building Square" name="bu_square"   style = "direction: ltr;" >
    @error('bu_square')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>


<div class="col-md-12 form-group row">
  <label  for="bu_type" class="col-md-2 col-form-label text-md-lift" >Building type</label>
  <select  class="col-md-4 col-form-label text-md-lift" name="bu_type">
  <option value="0" > Flat </option>
  <option value="1" > Chalet</option>
  <option value="2" > Vella</option>

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
  <option value="0" > Active </option>
  <option value="1" > Deactive</option>

  </select>
 @error('bu_status')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
 @enderror
</div>

<div class="col-md-12 form-group row">
  <label  for="bu_meta" class="col-md-2 col-form-label text-md-lift" >Building Keywords</label>

    <input id="bu_meta" type="text" class="form-control"style="width:500px;"placeholder="Add Building Keywords" name="bu_meta"   style = "direction: ltr;" >
 @error('bu_meta')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
 @enderror
</div>

<div class="col-md-12 form-group row">
  <label  for="bu_meta" class="col-md-2 col-form-label text-md-lift" >Building Small Discreption</label>

    <textarea id="bu_small_dis" type="text" rows="2" class="form-control"style="width:500px;"placeholder="Add Building Small Discreption" name="bu_small_dis"   style = "direction: ltr;" ></textarea>
 @error('bu_small_dis')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
 @enderror
</div>

<div class="col-md-12 form-group row">
  <label  for="bu_longitude" class="col-md-2 col-form-label text-md-lift" >Building Longitude</label>

    <input id="bu_longitude"  class="form-control"style="width:500px;"placeholder="Add Building Longitude" name="bu_longitude"   style = "direction: ltr;" >
 @error('bu_longitude')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
 @enderror
</div>

<div class="col-md-12 form-group row">
  <label  for="bu_latitude" class="col-md-2 col-form-label text-md-lift" >Building Latitude</label>

    <input id="bu_latitude" class="form-control"style="width:500px;"placeholder="Add Building Longitude" name="bu_latitude"   style = "direction: ltr;" >
 @error('bu_latitude')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
 @enderror
</div>

<div class="col-md-12 form-group row">
  <label  for="bu_long_dis" class="col-md-2 col-form-label text-md-lift" >Building Full Discreption</label>

    <textarea id="bu_long_dis" type="text" rows="4" class="form-control"style="width:500px;"placeholder="Add Building Full Discreption" name="bu_long_dis"   style = "direction: ltr;" ></textarea>
 @error('bu_long_dis')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
 @enderror
</div>


    <div class="form-group row mb-0">
        <div class="col-md-12 offset-md-4">
            <button type="submit" class="btn btn-warning">
                {{ __('Add New Building ') }}
            </button>
        </div>
    </div>
</div>
