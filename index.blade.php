@extends('layout')

@section('content')
    <a href="{{ route('barangs.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->kode }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td>Rp {{ number_format($barang->harga_satuan, 0, ',', '.') }}</td>
                    <td>{{ $barang->jumlah }}</td>
                    <td>
                        @if($barang->foto)
                            <img src="{{ asset('storage/' . $barang->foto) }}" width="60">
                        @else
                            Tidak ada
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('barangs.edit', $barang) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barangs.destroy', $barang) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
