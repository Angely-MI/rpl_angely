@extends('layout')

@section('content')
    <h4>Edit Barang</h4>
    <form method="POST" action="{{ route('barangs.update', $barang) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" value="{{ $barang->kode }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $barang->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Harga Satuan</label>
            <input type="number" name="harga_satuan" value="{{ $barang->harga_satuan }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="{{ $barang->jumlah }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Foto (Opsional)</label><br>
            @if($barang->foto)
                <img src="{{ asset('storage/' . $barang->foto) }}" width="60" class="mb-2"><br>
            @endif
            <input type="file" name="foto" class="form-control">
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('barangs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
