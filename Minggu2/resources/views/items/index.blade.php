<!DOCTYPE html>
<html>
<head>
    <title>Item List</title> {{-- digunakan untuk menentukan judul halaman pada browser--}}
</head>
<body>
    <h1>Items</h1> {{-- digunakan untuk menampilkan judul utama pada halaman browser--}}
    @if(session('success')) {{-- digunakan untuk melihat apakan ada key (success) untuk menampilkan pesan apabila operasi berhasil seperti menambah ataupun menghapus item--}}
        <p>{{ session('success') }}</p> {{-- digunakan apabila berhasil maka pesan success akan ditampilkan dalam browser--}}
    @endif {{--digunakan untuk menutup blok (if)--}}
    <a href="{{ route('items.create') }}">Add Item</a> {{--digunakan untuk mengarahkan pada halaman tambah item--}}
    <ul>
        @foreach ($items as $item) {{-- digunakan untuk melakukan perulangan pada setiap item didalam variabel--}}
            <li>
                {{ $item->name }} {{--digunakan untuk menampilkan nama item--}}
                <a href="{{ route('items.edit', $item) }}">Edit</a> {{--digunakan untuk membuat tombol edit--}}
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;"> {{--digunakan untuk membuat form menghapus item--}}
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button> {{--digunakan untuk membuat tombol menghapus item apabila ditekan maka form akan dihapus dari database--}}
                </form>
            </li>
        @endforeach
    </ul>
</body>

</html>