
<x-app-layout>

<h1>Tambah Produk</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="description">{{ old('description') }}</textarea><br><br>

    <label>Harga:</label><br>
    <input type="number" name="price" step="0.01" value="{{ old('price') }}"><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stock" value="{{ old('stock') }}"><br><br>

    <button type="submit">Simpan</button>
</form>

{{-- <a href="{{ route('products.index') }}">Kembali</a> --}}


</x-app-layout>
