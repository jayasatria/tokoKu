@extends('layout.layout')
@section('container')
<div class="container d-flex justify-content-center">
    <div class="col-lg-6">
        <div class="card my-4">
            <div class="card-body" >
                <form class="form-group" action="/store" method="POST">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal">
                    </div>
                    <div class="d-flex justify-content-lg-between">
                        <div class="mb-3">
                            <label for="0.025_gr" class="form-label">0.025 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="0.025_gr">
                        </div>
                        <div class="mb-3">
                            <label for="0.05_gr" class="form-label">0.05 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="0.05_gr">
                        </div>
                        <div class="mb-3">
                            <label for="0.1_gr" class="form-label">0.1 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="0.1_gr">
                        </div>
                    </div>
                    <div class="d-flex justify-content-lg-between">
                        <div class="mb-3">
                            <label for="0.2_gr" class="form-label">0.2 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="0.2_gr">
                        </div>
                        <div class="mb-3">
                            <label for="0.5_gr" class="form-label">0.5 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="0.5_gr">
                        </div>
                        <div class="mb-3">
                            <label for="1_gr" class="form-label">1 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="1_gr">
                        </div>
                    </div>
                    <div class="d-flex justify-content-lg-between">
                        <div class="mb-3">
                            <label for="5_gr" class="form-label">5 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="5_gr">
                        </div>
                        <div class="mb-3">
                            <label for="10_gr" class="form-label">10 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="10_gr">
                        </div>
                        <div class="mb-3">
                            <label for="25_gr" class="form-label">25 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="25_gr">
                        </div>
                    </div>
                    <div class="d-flex justify-content-lg-between">
                        <div class="mb-3">
                            <label for="50_gr" class="form-label">50 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="50_gr">
                        </div>
                        <div class="mb-3">
                            <label for="100_gr" class="form-label">100 gr</label>
                            <input placeholder="Rp" type="number" min="0" max="100000000" class="form-control" id="100_gr">
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection