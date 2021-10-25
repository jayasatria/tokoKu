@extends('layout.layout')

@section('container')


<div class="row">
       @foreach ($image_name as $item)
       <div class="container d-flex">
           <div class="col-lg-8">
               <img src="/storage/images/{{ $item->image_product }}.jpg" style="width: 30rem" alt="">
           </div>
           <div class="col-lg-4"></div>
       </div>
       @endforeach
   </div>

@endsection