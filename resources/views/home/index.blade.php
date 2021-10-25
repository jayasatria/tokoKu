@extends('layout.layout')

@section('container')
    <div class="container py-lg-5">
        <h4>Emas Mini</h4>
                <hr>
        <div class="row">
          @foreach ($image_name as $item)
         
            <div class="col-lg-4 my-2">
              <a href="/{{ $item->image_product }}" class="text-decoration-none text-black">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="storage/images/{{ $item->image_product }}.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?= trim($item['image_product'], "_gr");?> Gram</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
              </a>
            </div>
            @endforeach
            
        </div>
    </div>

    <div class="container py-lg-5">
      <h4>Emas Antam</h4>
              <hr>
      <div class="row">
        @foreach ($image_antam as $item)
       
          <div class="col-lg-4 my-2">
            <a href="" class="text-decoration-none text-black">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="storage/images/{{ $item->image_product }}.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?= trim($item['image_product'], "_gr");?> Gram</h5>
                    
                  </div>
              </div>
            </a>
          </div>
          @endforeach
          
      </div>
  </div>
@endsection