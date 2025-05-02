<x-app-layout>
    <h1>Daftar Produk</h1>
    
    <a href="{{ route('products.create') }}">+ Tambah Produk</a>
    
    <table border="1 px" cellpadding="10" cellspacing="0" style="margin-top: 20px; width: 100%; text-align: left; border-collapse: collapse;">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="#">Edit</a>
                    <form action="#" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    </x-app-layout>
    