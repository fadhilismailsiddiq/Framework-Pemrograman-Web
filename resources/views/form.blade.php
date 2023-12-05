@extends('home')

@section('form')
<div class="col-lg-12" style="background-color: #F3EEEA; padding-top: 3%; padding-bottom: 1%;" >
    <br>
    <form action="/proses" method="post" class="forms-sample">
        @csrf
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Isi Formulir Dibawah</h4>
                    <div class="form-group">
                        <label for="KodeBarang">Kode Produk</label>
                        <input type="text" class="form-control" name="kodeBarang" placeholder="Product Code">
                    </div>
                    <div class="form-group">
                        <label for="NamaBarang">Nama Produk</label>
                        <input type="text" class="form-control" name="namaBarang" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <label for="JenisBarang">Jenis Produk</label>
                        <select class="js-example-basic-single w-100" name="jenisBarang">
                            <option value="makanan">Produk Makanan</option>
                            <option value="minuman">Produk Minuman</option>
                            <option value="kesehatan">Produk Kesehatan</option>
                            <option value="rumah tangga">Produk Rumah Tangga </option>
                            <option value="kecantikan">Produk Kecantikan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="text" class="form-control" name="qty" placeholder="QTY">
                    </div>
                    <div class="form-group">
                        <label for="qty">Harga</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="text" class="form-control" name="harga">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Hitung</button>
                    <button class="btn btn-light">Cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
