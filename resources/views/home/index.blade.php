@extends('layout.layout')

@section('container')
    <div class="container py-lg-5">
        <h4>Emas Mini</h4>
                <hr>
        <div class="row">
          @foreach ($image_name as $item)
              
         <?php 
          $name[] = parse_str($item['image_product']);
        dd($name);
         ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="storage/images/{{ $item->image_product }}.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection