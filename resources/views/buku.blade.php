@extends('layouts/app')

@section('title', 'Data Buku')

@section('content')
<table class="table table-stripped">
    <thead>
        <tr>
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tanggal Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_buku as $buku)
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp. ".number_format($buku->harga, 2,',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d-m-Y') }}</td>
            </tr>
        @endforeach
    </tbody>
    <tr>
        <td colspan="3">
            Total Buku
        </td>
        <td>
            {{ $total_buku }}
        </td>
    </tr>
    <tr>
        <td colspan="3">
            Total Harga
        </td>
        <td>
            {{ "Rp. ".number_format($total_harga, 2,',', '.')}}
        </td>
    </tr>
</table>
@endsection