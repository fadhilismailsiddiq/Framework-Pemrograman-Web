@extends('home')

@section('table')
<div class="col-lg-12" style="background-color: #F3EEEA; padding-top: 3%; padding-bottom: 1%;" >
    <br>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaksi</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>QTY</th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th>Diskon</th>
                                <th>Total Terbaru</th>
                                <th>Action</th> <!--Kolom untuk tombol aksi-->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $key )
                            <tr>
                                <td>{{ $key->id }}</td>
                                <td>{{ $key->Nama_Barang }}</td>
                                <td>{{ $key->Jenis_Barang }}</td>
                                <td>{{ $key->QTY }}</td>
                                <td>Rp. {{ $key->Harga }}</td>
                                <td>Rp. {{ $key->Total }}</td>
                                <td>Rp. {{ $key->Diskon }}</td>
                                <td>Rp. {{ $key->Total_Terbaru }}</td>
                                <td>
                                    <a href="{{ route('barangs.edit',['id' => $key->id]) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ route('barangs.destroy', ['id' => $key->id]) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
