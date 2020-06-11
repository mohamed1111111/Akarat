<!-- @if(Session('flash_message'))
<div class="alert alert-danger" id="mes">
  {{ Session::get('flash_message')}}

</div>

@endif -->

@if (session('status'))
<br>
    <div class="alert alert-success">
        {{ session('status') }}
        
    </div>
@endif
