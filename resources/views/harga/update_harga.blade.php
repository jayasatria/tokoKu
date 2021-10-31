@extends('layout/layout')

@section('container')
    <div class="container">
        <form action="/create" method="get">
        <button type="submit">Update Harga</button>
        </form>

       
        <table class="table table-responsive table-striped table-success">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Harga</th>
                
              </tr>
            </thead>
            <tbody>
              
                  
              
              <tr>
                <th scope="row">1</th>
                <td>0.025 gr</td>
                <td>Rp. <?php 
                echo number_format($product['o0025_gr'], 2,",",".");
                ?></td>
               
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>0.05 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o005_gr'], 2,",",".");
                  ?></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>0.1 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o01_gr'], 2,",",".");
                  ?></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>0.2 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o02_gr'], 2,",",".");
                  ?></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>0.5 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o05_gr'], 2,",",".");
                  ?></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>1 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o1_gr'], 2,",",".");
                  ?></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>5 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o5_gr'], 2,",",".");
                  ?></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>10 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o10_gr'], 2,",",".");
                  ?></td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>25 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o25_gr'], 2,",",".");
                  ?></td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>50 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o50_gr'], 2,",",".");
                  ?></td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>100 gr</td>
                <td>Rp. <?php 
                  echo number_format($product['o100_gr'], 2,",",".");
                  ?></td>
              </tr>
              
            </tbody>
          </table>

          <div class="my-4">
            <h4>Harga buyback/gr : Rp. <?php 
              echo number_format($product['buyback'], 2, ",", ".");
              ?></h4>
          </div>
    </div>
@endsection