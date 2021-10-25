@extends('layout.layout')

@section('container')


<div class="container my-4">
    <div class="row">
       @foreach ($image_name as $item)
           <div class="col-lg-10 d-flex justify-content-lg-between">
               <div class="col mx-2">
                   <img src="/storage/images/{{ $item->image_product }}.jpg" style="width: 30rem" alt="">
               </div>
               <div class="col mx-2 card" style="width: 100px">
                   <div class="card-body">
                       <h4 class="card-title">{{ $item->category }} <?= trim($item['image_product'], "_gr");?> Gram</h4>
                       <hr>
                       <p>Detail Produk</p>
                       <p>Emas Murni paling  terkecil di dunia yang didistribusikan hanya melalui Distributor Emas Berlian PT. Odc Inter Rotasi.</p>
                       <p>Kadar : 24 Karat (99%)</p>
                       <p>Berat : <?= trim($item['image_product'], "_gr");?> gram</p>
                    </div>
               </div>
           </div>
           <div class="col-lg-2"></div>
        @endforeach
    </div>
</div>

@endsection