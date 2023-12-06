@extends('home')

@section('edit')
<div class="col-lg-12" style="background-color: #F3EEEA; padding-top: 3%; padding-bottom: 1%;">
    <br>
    <form action="{{ url('table'.'/'.$barang->id) }}" method="post" class="forms-sample">
        @csrf
        @method('PUT')
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data</h4>

                    <div class="form-group">
                        <label for="KodeBarang">Kode Produk</label>
                        <input type="text" class="form-control" name="Kode_Barang" value="{{ $barang->Kode_Barang }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="NamaBarang">Nama Produk</label>
                        <input type="text" class="form-control" name="Nama_Barang" value="{{ $barang->Nama_Barang }}">
                    </div>

                    <div class="form-group">
                        <label for="JenisBarang">Jenis Produk</label>
                        <select class="js-example-basic-single w-100" name="Jenis_Barang">
                            <option {{ $barang->Jenis_Barang == 'Produk Makanan' ? 'selected' : '' }}>Produk Makanan</option>
                            <option {{ $barang->Jenis_Barang == 'Produk Minuman' ? 'selected' : '' }}>Produk Minuman</option>
                            <!-- ... -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="text" class="form-control" name="QTY" value="{{ $barang->QTY }}">
                    </div>

                    <div class="form-group">
                        <label for="qty">Harga</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="text" class="form-control" name="Harga" value="{{ $barang->Harga }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <a href="{{ route('barangs.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
