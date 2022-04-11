@extends('layouts.app')

@section('title') View @endsection

@section('content')
<div class="card bg-light mt-5" >
  <div class="card-header bg-success text-center h3">Post Info</div>

</div>
<div class="card bg-light mt-5" style="max-width: 18rem,text-align:center;">
  <div class="card-body">
      <div class="p-2">
       <h5 class="card-title" style="font-size:18px;display:inline;">Title:</h5>
       <p class="card-text" style="display:inline;">{{$post[1]}}</p>
      </div>
      <div class="p-2">
      <h5 class="card-title" style="font-size:18px;display:inline;">posted By:</h5>
      <p class="card-text" style="display:inline;">{{$post[2]}}</p>
      </div>
      <div class="p-2">
      <h5 class="card-title" style="font-size:18px;display:inline;">Created At:</h5>
    <p class="card-text" style="display:inline;">{{$post[3]}}</p>
  </div>
</div>  

      @endsection     

