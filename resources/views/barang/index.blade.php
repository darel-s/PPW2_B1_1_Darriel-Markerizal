@extends('layout.app')

@section('content')
    @include('partials.header') 
    <h1 class="text-2xl font-semibold mb-4">Data Barang</h1>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nama Barang</th>
                <th class="px-4 py-2">Harga</th>
                <th class="px-4 py-2">Stok</th>
                <th class="px-4 py-2">ID Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
            <tr>
                <td class="border px-4 py-2">{{ $item->id }}</td>
                <td class="border px-4 py-2">{{ $item->nama_barang }}</td>
                <td class="border px-4 py-2">{{ $item->harga }}</td>
                <td class="border px-4 py-2">{{ $item->stok }}</td>
                <td class="border px-4 py-2">{{ $item->id_supplier }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('partials.footer') 
@endsection
