@extends('Layout.index')

@section('title', 'Checkout')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-auto">
                <img src="{{ URL::asset('/images/buku.jpeg') }}">

                <p class="mt-2 fw-bold">Judul buku</p>
                <p class="price ">100.000</p>
            </div>
            <div class="col">
                <h3>Checkout</h3>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Tulis ALamat Pengiriman" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Alamat Pengiriman</label>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <select class="form-select mt-3" aria-label="Default select example">
                            <option selected>Kota</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <select class="form-select mt-3" aria-label="Default select example">
                            <option selected>Kabupaten</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <select class="form-select mt-3" aria-label="Default select example">
                            <option selected>Provinsi</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="dropdown mt-3">
                    <select class="form-select mt-3" aria-label="Default select example">
                        <option selected>Metode Pembayaran</option>
                        <option value="1">Transfer Bank</option>
                    </select>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Bank Transfer</a></li>
                    </ul>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <p class="text-right fw-bold price">Total Tagihan : 125.000</p>
                        <a class="btn cart" href="#">Bayar</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

@endsection
