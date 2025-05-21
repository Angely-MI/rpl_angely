@extends('layout')

@section('content')
    <h4>Tambah Barang</h4>
    <form method="POST" action="{{ route('barangs.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Harga Satuan</label>
            <input type="number" name="harga_satuan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Foto (Opsional)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('barangs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
