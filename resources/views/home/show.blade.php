@extends('layout.layout')

@section('container')


<div class="container my-4">
    
       @foreach ($image_name as $item)
           <div class="col-lg-10 d-lg-flex justify-content-lg-between">
               <div class="col-lg-5">
                   <img src="/storage/images/{{ $item->image_product }}.jpg" style="width: 30rem" alt="">
               </div>
               <div class="col-lg-5 card">
                   <div class="card-body">
                       <h4 class="card-title">{{ $item->category }} <?= trim($item['image_product'], "_gr");?> Gram</h4>
                       <hr>
                       <p>Detail Produk</p>
                       @if ($item->category == "Emas Mini")
                       <p>Emas Murni paling  terkecil di dunia yang didistribusikan hanya melalui Distributor Emas Berlian PT. Odc Inter Rotasi.</p>
                        @elseif($item->category == "Emas Antam")
                        <p>Emas Murni yang di produksi oleh PT Antam melalui distributor Emas Berlian PT. Odc Inter Rotasi</p>
                       @endif
                       <p>Kadar : 24 Karat (99%)</p>
                       <p>Berat : <?= trim($item['image_product'], "_gr");?> gram</p>
                       <p>Untuk Pemesanan hubungi <i class="bi bi-whatsapp"></i> 082144607787</p>
                    </div>
               </div>
           </div>
           <div class="col-lg-2"></div>
        @endforeach
    
</div>

@endsection