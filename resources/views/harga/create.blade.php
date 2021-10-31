@extends('layout.layout')
@section('container')
<div class="container d-flex justify-content-center">
    <div class="col-lg-6">
        <div class="card my-4">
            <div class="card-body" >
                <form class="form-group" action="/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ old('tanggal') }}">
                        <span style="color: red">@error('tanggal')
                            {{ $message }}
                        @enderror</span>
                    </div>
                    <div class="d-flex justify-content-lg-between">
                        <div class="mb-3">
                            <label for="0,025_gr" class="form-label">0.025 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="0,025_gr" value="{{ old('0,025_gr') }}">
                            <span style="color: red">@error('0,025_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="0,05_gr" class="form-label">0.05 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="0,05_gr" value="{{ old('0,05_gr') }}">
                            <span style="color: red">@error('0,05_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="0,1_gr" class="form-label">0.1 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="0,1_gr" value="{{ old('0,1_gr') }}">
                            <span style="color: red">@error('0,1_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-lg-between">
                        <div class="mb-3">
                            <label for="0,2_gr" class="form-label">0.2 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="0,2_gr" value="{{ old('0,2_gr') }}">
                            <span style="color: red">@error('0,2_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="0,5_gr" class="form-label">0.5 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="0,5_gr" value="{{ old('0,5_gr') }}">
                            <span style="color: red">@error('0,5_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="1_gr" class="form-label">1 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="1_gr" value="{{ old('1_gr') }}">
                            <span style="color: red">@error('1_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-lg-between">
                        <div class="mb-3">
                            <label for="5_gr" class="form-label">5 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="5_gr" value="{{ old('5_gr') }}">
                            <span style="color: red">@error('5_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="10_gr" class="form-label">10 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="10_gr" value="{{ old('10_gr') }}">
                            <span style="color: red">@error('10_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="25_gr" class="form-label">25 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="25_gr" value="{{ old('25_gr') }}">
                            <span style="color: red">@error('25_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-lg-between">
                        <div class="mb-3">
                            <label for="50_gr" class="form-label">50 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="50_gr" value="{{ old('50_gr') }}">
                            <span style="color: red">@error('50_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="100_gr" class="form-label">100 gr</label>
                            <input placeholder="Rp" type="number" class="form-control" name="100_gr" value="{{ old('100_gr') }}">
                            <span style="color: red">@error('100_gr')
                                {{ $message }}
                            @enderror</span>
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection